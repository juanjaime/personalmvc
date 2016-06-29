<?php
/**
 * Created by PhpStorm.
 * User: jmontemayor
 * Date: 29/06/2016
 * Time: 09:26 AM
 */

namespace Core;


abstract class Controller
{
    protected $route_params=[];


    public function __construct($route_params)
    {
        $this->route_params=$route_params;
    }
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        $method=$name.'Action';
        if (method_exists($this,$method)) {
            if ($this->before() !== false) {
                call_user_func_array([$this, $method], $arguments);
                $this->after();
            }
        }
        else{
            echo "Method $method not found in controler".get_class($this);
        }
    }
    protected function before(){
        
    }
    protected function after(){

    }
}