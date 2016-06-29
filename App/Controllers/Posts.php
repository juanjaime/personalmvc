<?php
namespace App\Controllers;
use  \Core\View;
/**
 * Created by PhpStorm.
 * User: jmontemayor
 * Date: 28/06/2016
 * Time: 03:10 PM
 */
class Posts extends \Core\Controller
{
    public function indexAction(){
        //echo 'Hello from the index action in the Post controller!';
        //echo "<h1>Query String Parameters: <pre>".htmlspecialchars(print_r($_GET,true))."</pre></h1>";
        View::renderTemplate('Posts/index.html');
    }
    public function addNewAction(){
        echo 'Hello from the addNew action in the Post controller!';
    }
    public function editAction(){
        echo 'Hello from the edit action in the Post controller!';
        echo "<p>Route Parameters: <pre>".htmlspecialchars(print_r($this->route_params, true))."</pre></p>";
    }
}