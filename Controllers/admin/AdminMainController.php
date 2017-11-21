<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 21.09.2017
 * Time: 12:25
 */

class AdminMainController extends BaseController
{
    public function indexAction()
    {
        $smarty=$this->getSmarty();
        $smarty->assign('categories',CategoryModel::getCat());
        $smarty->display('Admin/Main/index.tpl');
    }
}