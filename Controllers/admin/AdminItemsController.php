<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 25.09.2017
 * Time: 17:51
 */

class AdminItemsController extends BaseController
{
   public function __construct()
   {
       parent::__construct();
       $this->getSmarty()->assign('admin',1);
   }

    public function indexAction()
    {
        #echo "<h1>This is <br>" . __FILE__;
        $total=ItemModel::total();
        $pagination=['perPage'=>$perPage=self::PAGINATION_PER_PAGE,
            'current_page'=>$page=isset($_GET['page']) ? $_GET['page']:1,
            'pagesTotal'=>ceil($total/self::PAGINATION_PER_PAGE)
        ];
        $smarty=$this->getSmarty();
        $smarty->assign([
            'items'=>ItemModel::getItems($page,$perPage),
            'cats'=>CategoryModel::getCat(),
            'pagination'=>$pagination
            ]);

        $smarty->display('admin/Items/index.tpl');
    }
    public function createAction(){
       $name=$_POST['name'];
       $description=$_POST['description'];
       $price=$_POST['price'];
       $category_id=$_POST['category_id'];
        $item=new ItemModel($name,$description,$price,$category_id);
        $item->save();
        $item=new ItemModel();
        $item->setCategory($category_id);
        $item->setDescription($description);
        $item->setName($name);
        $item->setPrice($price);
        $item->save();
        #$item->setCategory($category_id)->setDescription($description)->setName($name)->setPrice($price);

        $fileStorage=realpath(__DIR__."/../../storage/items");
        $tmp_name=$_FILES['file']['tmp_name'];
        move_uploaded_file($tmp_name,$fileStorage."/".$item->getId().'.jpg');
        /*
         echo "<pre>";
        print_r($_POST);
        print_r($_FILES);
        die();
        */
        header("Location: /admin/items");

    }
    public function updateAction(){}

    public function removeAction(){
        global $params;
        if(!$id=intval($params[0]))die("NO picture to delete");
        $id=intval($params[0]);
        $item=ItemModel::find($id);
        if(!$item->remove()) die("Can`t  delete this Item");
        header("Location: /admin/items");


    }











}