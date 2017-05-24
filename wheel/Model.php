<?php
class Model extends Sql
{
    protected $_model;
    protected $_table;
    public static $dbConfig = [];

    public function __construct(){
        $this->connect(self::$dbConfig['host'], self::$dbConfig['username'], self::$dbConfig['password'],self::$dbConfig['dbname']);

        if(!$this->_table){
            $this->_model = get_class($this);
            $this->_model = substr($this->_model,0,-5);
            $this->_model = strtolower($this->_model);
        }
    }
}