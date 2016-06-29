<?php
/**
 * Created by PhpStorm.
 * User: jmontemayor
 * Date: 28/06/2016
 * Time: 03:34 PM
 */

namespace App\Controllers;


class Home extends \Core\Controller
{
    public function indexAction(){
        $var=9;
        echo"Hello from the index action in the Home controller! $var";
    }
    protected function before()
    {
        echo("(before)");
        return false;
    }
    protected function after()
    {
        echo("(after)");
    }
}