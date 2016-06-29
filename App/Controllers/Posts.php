<?php
namespace App\Controllers;
use  \Core\View;
use \App\Models\Post;
/**
 * Created by PhpStorm.
 * User: jmontemayor
 * Date: 28/06/2016
 * Time: 03:10 PM
 */
class Posts extends \Core\Controller
{
    public function indexAction(){
        $posts=Post::getAll();
        
        View::renderTemplate('Posts/index.html',['posts'=>$posts]);
    }
    public function addNewAction(){
        echo 'Hello from the addNew action in the Post controller!';
    }
    public function editAction(){
        echo 'Hello from the edit action in the Post controller!';
        echo "<p>Route Parameters: <pre>".htmlspecialchars(print_r($this->route_params, true))."</pre></p>";
    }
}