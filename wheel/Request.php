<?php
class Request{
    protected $_getpram;
    protected $_postpram;
    protected $_requestpram;

    public function __construct(){
        $this->_getpram = $_GET;
        $this->_postpram = $_POST;
        $this->_requestpram = $_REQUEST;
    }

    public function get($key,$default=null){
        if($this->_getpram && isset($this->_getpram[$key])){
            return $this->_getpram[$key];
        }
        return $default;
    }

    public function post($key,$default=null){
        if($this->_postpram && isset($this->_postpram[$key])){
            return $this->_postpram[$key];
        }
        return $default;
    }

    public function request($key,$default=null){
        if($this->_requestpram && isset($this->_requestpram[$key])){
            return $this->_requestpram[$key];
        }
        return $default;
    }
}