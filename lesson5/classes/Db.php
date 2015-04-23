<?php


class Db {

    public  $dbh;


    public function __construct()
    {
       $config = include __DIR__.'/../config/Db.php';

        $dsn = 'mysql:dbname='.$config['base'].';host=' . $config['host'];

        $this->dbh = new PDO($dsn, $config['user'], $config['pass']);
    }

    public function findAll($class,$sql,$params=[])
    {
        $sth = $this->dbh->prepare($sql);

        $sth->execute($params);

        $res = $sth->fetchAll(PDO::FETCH_CLASS,$class);

        return $res;



    }

    public function findOne($class,$sql,$params=[])
    {
        return $this->findAll($class,$sql,$params)[0];

    }

    public function dBExec($sql,$params=[])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        if (false == $res){
            return false;
        }
        return true;

    }






}