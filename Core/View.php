<?php
/**
 * Created by PhpStorm.
 * User: jmontemayor
 * Date: 29/06/2016
 * Time: 09:58 AM
 */

namespace Core;


class View
{
    public static function render($view, $args= []){
        extract($args, EXTR_SKIP);
        $file="../App/Views/$view";
        if(is_readable($file)){
            require $file;
        }
        else{
            echo "$file not found";
        }
    }
    public static function renderTemplate($template,$args=[]){
        static $twig=null;
        if($twig===null){
            $loader= new \Twig_Loader_Filesystem('../App/Views');
            $twig=new \Twig_Environment($loader);
        }
        echo $twig->render($template, $args);
    }

}