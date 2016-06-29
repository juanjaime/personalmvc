<?php
require '../vendor/autoload.php';
Twig_Autoloader::register();
/**
 * Created by PhpStorm.
 * User: jmontemayor
 * Date: 28/06/2016
 * Time: 11:02 AM
 */
$router = new Core\Router();
$router->add('',['controller' =>'Home','action'=>'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/{controller}/{action}',['namespace'=>'Admin']);
$router->dispatch($_SERVER['QUERY_STRING']);