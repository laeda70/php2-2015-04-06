<?php

require __DIR__.'/../classes/Db.php';
Abstract class Article {

    abstract protected function getTable();
    protected $db;
    public function __construct(){
        $this->db = new Db();
    }


    public function findAll(){
        return $this->db->findAll("SELECT * FROM " .$this->getTable());
    }

    public function findOne($id){
        return $this->db->findOne('SELECT * FROM ' .$this->getTable(). ' WHERE id =' .$id);
    }

    public function dbExec($short_disc, $fullname){
        return $this->db->dBExect("INSERT INTO " .$this->getTable(). "(short_disc,fullname) VALUES ( '$short_disc','$fullname')");

    }
} 