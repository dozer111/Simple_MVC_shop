<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 26.09.2017
 * Time: 15:04
 */

class CdnController extends BaseController
{
    public function indexAction()
    {
        // TODO: Implement indexAction() method.
    }

    public function getItemImageAction(){
        global  $params;
        $id=intval($params[0]);
        header("Content-type:image/jpg");
        $fileStorage=realpath(__DIR__."/../storage/items");
        $filePath=$fileStorage."/".$id.".jpg";
        if(!file_exists($filePath))die(file_get_contents($fileStorage."/default.jpg"));
        die(file_get_contents($filePath));
    }


}