<?php
require '../vendor/autoload.php';
Twig_Autoloader::register();
/**
 * Created by PhpStorm.
 * User: jmontemayor
 * Date: 28/06/2016
 * Time: 11:02 AM
 */
//require '../App/Controllers/Posts.php';
//require '../Core/Router.php';

$router = new Core\Router();
/*
//echo get_class($router);
$router->add('',['controler' =>'Home','action'=>'index']);
$router->add('posts',['controler' =>'Posts','action'=>'index']);
$router->add('posts/new',['controler' =>'Posts','action'=>'new']);

/*echo '<pre>';
var_dump($router->getRoutes());
echo '</pre>';
*/
$router->add('',['controller' =>'Home','action'=>'index']);
//$router->add('posts',['controler' =>'Posts','action'=>'index']);
//$router->add('','{controller}/{action}');
$router->add('{controller}/{action}');
//$router->add('admin/{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/{controller}/{action}',['namespace'=>'Admin']);
/*
$url = $_SERVER['QUERY_STRING'];
echo '<pre>';
//var_dump($router->getRoutes());
echo htmlspecialchars(print_r($router->getRoutes(), true));
echo '</pre>';
if($router->match($url)){
    echo '<pre>';
    var_dump($router->getParams());
    echo '</pre>';
}
else{
    echo "No Route found for URL: ".$url;
}
*/
$router->dispatch($_SERVER['QUERY_STRING']);