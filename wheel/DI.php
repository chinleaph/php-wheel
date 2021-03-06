<?php
class DI{
    protected $_service = [];

    public function set($name,$definition){
        $this->_service[$name] = $definition;
    }

    public function get($name){
        if(isset($this->_service[$name])){
            $definition = $this->_service[$name];
        }else{
            throw new Exception('Service "'.$name.'" wasn\'t found in the dependency injection container');
        }

        $instance = null;
        if(is_object($definition)){
            $instance = call_user_func($definition);
        }

        return $instance;
    }
}