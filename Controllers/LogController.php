<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 20.09.2017
 * Time: 16:10
 */

class LogController extends BaseController
{

    public function indexAction()
    {
        $smarty=$this->getSmarty();
        $smarty->assign('errors',Logger::getAllErrors());
        $smarty->assign('logs',Logger::getAllRequests());
        $smarty->display('log.tpl');
    }


}