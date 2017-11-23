<?php
require dirname(__FILE__).'/Spider.php';
require dirname(__FILE__).'/Connection.php';

use Tools\Spider;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/22 0022
 * Time: 下午 11:11
 */

class Run
{
    public function __construct()
    {
        $this->start();
    }

    public function start(){
        $spider = new Spider();
        $spider->parse();
    }
}


new  Run();