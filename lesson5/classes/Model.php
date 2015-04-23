<?php
/**
 * Created by PhpStorm.
 * User: folder
 * Date: 21.04.2015
 * Time: 13:45
 */
require __DIR__.'/Db.php';

abstract class Model
{
    protected static $table;


    public  static  function getTable()
    {
        return static::$table;
    }

    public static function  findAll()
        {
            $class = static::class;
            $sql = "SELECT * FROM " .static::getTable();
            $db = new Db();
            return $db->findAll($class,$sql);
        }
    public static function findOne($id)
    {
        $class = static::class;
        $sql = "SELECT * FROM " .static::getTable(). " WHERE id=:id";
        $db = new Db();
        return $db->findOne($class,$sql,[':id'=>$id]);

    }

    public function insert()
    {

        $sql = " INSERT INTO " .static::getTable(). "(short_disc,fullname) VALUES (:short_disc,:full_name)";
        $db = new Db();
        return $db->dBExec($sql,[':short_disc'=>$this->short_disc,
                                 ':full_name'=>$this->full_name,
                                ]);

    }

    public function update()
    {

        $sql = 'UPDATE ' .static::getTable(). ' SET short_disc=:short_disc, fullname=:full_name  WHERE id=:id';
        $db = new Db();
        return $db->dBExec($sql,[':id'=>$this->id,
                                ':short_disc'=>$this->short_disc,
                                 ':full_name' =>$this->full_name,
                                ]);

    }

    public function delete()
    {
        $sql = "DELETE FROM " .static::getTable()." WHERE id=:id";
        $db = new Db();
        return $db->dBExec($sql,[':id'=>$this->id]);

    }




}