<?php

/**
 * Created by PhpStorm.
 * User: 32
 * Date: 19.08.2017
 * Time: 13:12
 */
class AdminOrdersController extends BaseController
{

    private $smarty;

    public function __construct()
    {
        parent::__construct();
        $this->smarty = $this->getSmarty();
        $this->getSmarty()->assign('admin', 1);
    }

    public function index()
    {
        mail("asdasd", "SUBJECT", "MESSAGE");
        //TODO FROM MODELS
        $query = "SELECT `orders`.*,`users`.`login` FROM `orders` LEFT JOIN `users` ON `users`.`id` = `orders`.`user`";
        $this->smarty->assign('orders', DB::getInstance()->query($query)->fetch_all(MYSQLI_ASSOC));
        $this->smarty->display('admin/orders.tpl');
    }
}