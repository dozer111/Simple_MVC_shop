<?php

/**
 * Created by PhpStorm.
 * User: 32
 * Date: 19.08.2017
 * Time: 13:12
 */
class AdminCategoriesController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->getSmarty()->assign('admin', 1);
    }

    public function indexAction()
    {
        $smarty = $this->getSmarty();
        $smarty->assign('categories', CategoryModel::getCat());
        $smarty->display('Admin/Categories/index.tpl');
    }

    public function updateAction()
    {
        #var_dump($_POST);
        #die();
        $id = $_POST['id'];
        $name = $_POST['name'];
        $weight = $_POST['weight'];

        $category = CategoryModel::find($id);
        if(!$category) {
            die("TODO THROW EXCEPTION");
        }

        $category->setName($name);
        $category->setWeight($weight);
        $category->save();
        header("Location: /admin/categories");

    }

    public function createAction()
    {
        $name = $_POST['name'];
        $weight = $_POST['weight'];
        $category = new CategoryModel($name, $weight);
        $category->save();
        header("Location: /admin/categories");
    }
}