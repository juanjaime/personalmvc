<?php
/**
 * Created by PhpStorm.
 * User: jmontemayor
 * Date: 29/06/2016
 * Time: 09:48 AM
 */

namespace App\Controllers\Admin;


class Users extends \Core\Controller
{
    protected function before()
    {
       
    }
    public function indexAction(){
        echo 'User Admin Index';
    }

}