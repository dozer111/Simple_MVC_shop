<?php

/**
 * Created by PhpStorm.
 * User: 32
 * Date: 19.08.2017
 * Time: 12:36
 */
class LogsController extends BaseController
{
    public function index()
    {
        $smarty = $this->getSmarty();
        $smarty->assign('errors', Logger::getAllErrors());
        $smarty->assign('logs', Logger::getAllRequests());
        $smarty->display('log.tpl');
    }
}