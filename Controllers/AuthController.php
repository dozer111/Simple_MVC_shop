 <?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 20.09.2017
 * Time: 12:29
 */

class AuthController extends BaseController
{
    public function indexAction()
    {
        $this->loginAction();
    }
    public function loginAction(){
        if($_SERVER["REQUEST_METHOD"]=="GET") $this->getSmarty()->display('Auth/login.tpl');

        @$login=$_POST['login'];
        @$pass=$_POST['pass'];
        $user= new UserModel($login,$pass);
        if(!$user->login())die("ERROR");
        $this->getSession()->set('user',$user);
        header("Location:/");

    }
    public function logoutAction(){
        $this->getSession()->forget('user');
        header("Location:/");
    }
    public function registerAction(){

        if($_SERVER["REQUEST_METHOD"]=="GET") $this->getSmarty()->display('Auth/register.tpl');
        $login=$_POST['login'];
        $pass=$_POST['pass'];
        $user= new UserModel($login,$pass);
        if(!$user->register())die("REGISTRATION ERROR");
        $this->getSession()->set('user',$user);
        header("Location: /main");

    }
}