<?php


class Db {

    public function __construct()
    {
       $config = include __DIR__.'/../config/Db.php';

        mysql_connect($config['host'],$config['user'],$config['pass']);
        mysql_select_db($config['base']);
    }

    public function findAll($sql)
    {
        $res = mysql_query($sql);
        if (false == $res){
            return false;
        }
        $ret = [];
        while($row = mysql_fetch_object($res)){
            $ret[] = $row;
        }
        return $ret;
    }

    public function findOne($sql)
    {
        return $this->findAll($sql)[0];

    }

    public function dBExect($sql)
    {
        $res = mysql_query($sql);
        if (false == $res){
            return false;
        }
        return true;
    }






}