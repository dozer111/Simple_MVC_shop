<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 19.09.2017
 * Time: 12:13
 */

abstract class BaseController
{
    private $session;
    private $smarty;
    const PAGINATION_PER_PAGE=8;

    public function __construct()
    {
        global $session;
        $this->session=$session;
        global $smarty;
        $this->smarty=$smarty;
    }

    abstract public function indexAction();
    public function getSession(){
        return $this->session;
    }
    public function getSmarty(){
        return $this->smarty;
    }

}