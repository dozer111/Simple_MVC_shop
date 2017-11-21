<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 20.09.2017
 * Time: 13:02
 */

class UserModel
{
    private $id;
    private $login;
    private $pass;
    private $isAdmin;
    private $createAt;
    private $loggedIn;

    const TABLE='users';
    const ROLE_USER=0;
    const ROLE_ADMIN=1;


    public function __construct($login='',$pass='',$role='')
    {
        $this->login=$login;
        $this->pass=$pass;
        $this->isAdmin=$role;
    }

    /**
     * Проверка на сузествование пользователя,
     * или, если передан не бул, возвращаем нашу строку пользователя с БД
     * @param $login
     * @param string $type
     * @return array|bool
     */
    public function userExists($login,$type="bool"){
        $db=DB::getInstance();
        $res=$db->query("SELECT * FROM `".self::TABLE."` 
        WHERE `login`= '".$login."'
        LIMIT 1");
        if($type ==="bool") return (bool) $db->affected_rows;
        return $res->fetch_assoc();

    }


    public function register(){
        if($this->userExists($this->login))die("User Exists");
        return $this->save();
    }



    public function save(){
        if($this->id)return $this->update();
        return $this->create();
    }#end save()

    public function update(){
        return false;

    }#end update()

    public function getLogin(){
        return $this->login;
    }

    public function create(){

        #var_dump($this);
        $this->isAdmin=(int) (in_array($this->isAdmin,[self::ROLE_USER, self::ROLE_ADMIN]))?$this->isAdmin:self::ROLE_USER;

        $query="
            INSERT INTO `".self::TABLE."`
            SET `login` = '".$this->login."',
            `pass`='".$this->pass."',
            `isAdmin`='".$this->isAdmin."'";
        $db=DB::getInstance();
        (new Logger(Logger::LOG_LEVEL_REQUEST,$query));
        $db->query($query);
        #var_dump($db->insert_id);
        if(!$id=$db->insert_id)return false;
        $this->id=$id;
        return true;
    }

    public function toArray(){
        return[
          'id'=>$this->id,
            'login'=>$this->login,
            'createdAt'=>$this->createAt,
            'loggedIn'=>$this->loggedIn,
            'role'=>$this->isAdmin
        ];
    }

    public static function isAuth(){
        return (bool)(new Session())->get('user',false);

    }
    public function login(){
      $user=$this->userExists($this->login,"array");
      $this->isAdmin=(int)$user['isAdmin'];
      if(!$user || $user['pass']!==$this->pass){
        return false;
      }
      return true;
    }

    public function isAdmin(){

        return $this->isAdmin === self::ROLE_ADMIN;
    }

}# end class