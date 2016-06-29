<?php
/**
 * Created by PhpStorm.
 * User: jmontemayor
 * Date: 28/06/2016
 * Time: 03:34 PM
 */

namespace App\Controllers;
use \Core\View;

class Home extends \Core\Controller
{
    public function indexAction(){
        //View::render('Home/index.php',['name'=>'Juan','colors'=>['red','green','blue']]);
        View::renderTemplate('Home/index.html',['name'=>'Juan','colors'=>['red','green','blue']]);
        
    }
    protected function before()
    {
        //echo("(before)");
        //return false;
    }
    protected function after()
    {
        //echo("(after)");
    }
}