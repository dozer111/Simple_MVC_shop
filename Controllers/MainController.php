<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 19.09.2017
 * Time: 12:13
 */

class MainController extends BaseController
{
    public function indexAction()
    {
        global $params;
        #print_r($params);
        $comment = new CommentModel();
        DB::getInstance();
        #print_r($this->getSession()->get('user'));
        $smarty = $this->getSmarty();
        $smarty->assign('categories',CategoryModel::getCat());
        $smarty->assign('items',ItemModel::getItems(1,3));
        $smarty->assign('categoryId',$params[0]);
        $smarty->display('Main/main.tpl');

    }

    public function showAction()
    {
        $smarty = $this->getSmarty();
        $smarty->display('Main/show.tpl');
    }

}