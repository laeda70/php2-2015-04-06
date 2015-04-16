<?php
 require __DIR__.'/../classes/Db.php';
    abstract class Article
    {
        abstract protected function getTable();
        protected  $db;
        public function __construct(){
            $this->db = new Db();

        }

        public function findAll()
        {

            return $this->db->findAll('SELECT * FROM '.$this->getTable());
        }

        public function findOne($id)
        {

           return $this->db->findOne('SELECT * FROM '.$this->getTable().' WHERE id='.$id);

        }



        public function dbExec($shortDisc,$longNew)
        {

            return $this->db->dbExec("INSERT INTO " .$this->getTable()."(short_disc,fullname) VALUES ('$shortDisc','$longNew')");

        }



    }