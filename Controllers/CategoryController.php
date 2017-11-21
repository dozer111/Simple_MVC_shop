<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 21.09.2017
 * Time: 18:31
 */

class CategoryController extends  BaseController
{

    public function indexAction()
    { global $params;
        $smarty=$this->getSmarty();
        $smarty->assign(['categories'=>CategoryModel::getCat(),'params'=>$params]);
        $smarty->display('Category/index.tpl');
    }
    public function showAction(){
        global $params;
        $smarty=$this->getSmarty();
        $smarty->assign('items',ItemModel::getItems(1,4));
        $smarty->assign('categories',CategoryModel::getCat());
        $smarty->assign('category_id',$params[0]);
        $smarty->display('Category/show.tpl');

    }
}