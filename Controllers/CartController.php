<?php

class CartController extends BaseController
{

    public function index()
    {
        $smarty = $this->getSmarty();
        $list = (new Cart())->getAll();

        $sum = 0;
        array_map(
            function($el) use (&$sum)
            {
                $sum += intval($el['quantity']) * intval($el['price']);
            },
            (new Cart())->getAll());

        $smarty->assign('items', $list);
        $smarty->assign('total', $sum);
        $smarty->display('cart.tpl');
    }

    public function add()
    {
        global $params;
        $item = ItemModel::find((int) $params[0])->toArray();
        (new Cart())->add($item);
        header('Location: ' . $_SERVER["HTTP_REFERER"] );
        exit;
    }

    public function get()
    {
        print_r((new Cart)->getAll());
        die();
    }

    public function inc()
    {
        global $params;
        $id = $params[0];
        (new Cart())->inc($id);
        header('Location: ' . $_SERVER["HTTP_REFERER"] );
        exit;
    }

    public function dec()
    {
        global $params;
        $id = $params[0];
        (new Cart())->dec($id);
        header('Location: ' . $_SERVER["HTTP_REFERER"] );
        exit;
    }

    public function makeOrder()
    {
        (new Cart())->makeOrder();
        header('Location: ' . $_SERVER["HTTP_REFERER"] );
        exit;
    }
}