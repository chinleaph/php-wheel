<?php
/**
 * 实现链式操作的类
 * User: User
 * Date: 2017-5-31
 * Time: 11:00
 */
class StringFormat{
    protected $_str;

    public function __construct($string){
        $this->_str = strval($string);
    }

    public function toUpper(){
        $this->_str = strtoupper($this->_str);
        return $this;
    }

    public function addMark(){
        $this->_str .= "\r   ---我是小尾巴";
        return $this;
    }

    public function toString(){
        return $this->_str;
    }
}