<?php

const DC=DIRECTORY_SEPARATOR;
$root=realpath(__DIR__.DC."/..");
require_once ($root.DC.'libs'.DC.'Smarty.class.php');
#print_r($_SERVER["REQUEST_URI"]);
$smarty=new Smarty();
$smarty->setTemplateDir($root.DC.'Views');



spl_autoload_register(function($className) use ($root){
    if(strpos($className,"Admin")===0){
        $className="admin/".$className;
    }
    $type="Helpers";
    $type=(strpos($className,"Controller"))?"Controllers":$type;
    $type=(strpos($className,"Model"))?"Models":$type;
    $fileName=$className.".php";
    $filePath=$root.DC.$type.DC.$fileName;
    if(file_exists($filePath)) require_once $filePath;
    else die("OOPS, this page not found");

});

$session=new Session();
$request=ltrim($_SERVER["REQUEST_URI"],"/");
#echo $request."<br><br><br>";
$path=explode("/",$request);

$controller=ucfirst(($temp=array_shift($path))?$temp:"main")."Controller";

if(strpos($controller,"dmin")&& $session->get('user')&&$session->get('user')->isAdmin()){
    $controller='Admin'.ucfirst(($temp=array_shift($path))?$temp:"categories")."Controller";
}

$action=(($need=array_shift($path))?$need:"index")."Action";

$params=[];
for($i=0;$i<count($path);$i++){
    $params[$i]=array_shift($path);
}
#echo "Controller==> {$controller}<br>Action ====>{$action}<br>";
#print_r($params);


#3
$obj=new $controller();
if(!method_exists($obj=new $controller(),$action))die("Action not found");
$obj->$action();
