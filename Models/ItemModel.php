<?php


class ItemModel
{
    private $id;
    private $name;
    private $description;
    private $price;
    private $category_id;

    const TABLE = "items";

    public function __construct($name = '', $description='',$price=0,$category=0)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price=$price;
        $this->category_id=$category;
    }

    public function save()
    {
        if ($this->id) {
            return $this->update();
        }

        return $this->create();
    }

    private function update()
    {
        $db = DB::getInstance();
        $query = "
        UPDATE `" . self::TABLE . "` 
            SET `name` = '".$this->name."',
            `description` = '".$this->description."',
            `price` = ".$this->price.",
            `category_id`='".$this->category_id."'
        WHERE `id` = ".$this->id." LIMIT 1";
        (new Logger(Logger::LOG_LEVEL_REQUEST, $query));
        $db->query($query);
        return (bool) $db->affected_rows;
    }

    private function create()
    {

        $query = "
          INSERT INTO `" . self::TABLE . "` 
             SET `name` = '".$this->name."',
            `description` = '".$this->description."',
            `price` = ".$this->price.",
            `category_id`='".$this->category_id."'";

        $db = DB::getInstance();
        (new Logger(Logger::LOG_LEVEL_REQUEST, $query));
        $db->query($query);

        return (!$this->id = $db->insert_id) ? false : true;
    }

    public static function getItems($page=1,$perPage=8)
    {
        $db = DB::getInstance();
        $query = "SELECT `" . self::TABLE . "`.*, `categories`.`name` as `category_name` 
        FROM `".self::TABLE."`
        LEFT JOIN `categories` 
        ON `categories`.`id` = `".self::TABLE."`.`category_id`
        ORDER BY `id` DESC";

        if($page && $perPage) {
            $query .= " LIMIT " . ($page - 1) * $perPage . "," . $perPage;
        }

        #print_r($db->query($query)->fetch_all(MYSQLI_ASSOC));
        #die();
        return $db->query($query)->fetch_all(MYSQLI_ASSOC);
    }

    public static function find($id) {
        $id = intval($id);
        $db = DB::getInstance();
        $query = "SELECT * FROM `" . self::TABLE . "` WHERE `id` = ".$id ." LIMIT 1";
        $res = $db->query($query)->fetch_assoc();
        if(!$res) {
            return null;
        }

        $self = new self($res['name'], $res['description'],$res['price'],$res['category_id']);
        $self->id = $res['id'];
        return $self;
    }

    public function setName($name) {
        $this->name = strip_tags(ucfirst($name));
    }
    public function setDescription($descript) {
        $this->description = strip_tags(ucfirst($descript));
    }
    public function setCategory($cat) {
        $this->category_id = intval($cat);
    }
    public function setPrice($price) {
        $this->price = intval($price);
    }

    public function getId(){
        return $this->id;
    }

    public function remove(){
        $db=DB::getInstance();
        $query="
        DELETE FROM `".self::TABLE."`
        WHERE `id`=".$this->id."
        LIMIT 1";
        $db->query($query);
        return (bool) $db->affected_rows;
    }

    public static function total(){
        $query="SELECT COUNT(*) as `count` FROM `".self::TABLE."`";
        return DB::getInstance()->query($query)->fetch_assoc()['count'];
    }




}