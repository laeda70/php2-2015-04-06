<?php
/* функция, возвращающая парметры для входа в БД  */

function dbParam(){
    return array(
      'host'=>'localhost',
        'name'=>'root',
        'pass'=>'',
        'dbname'=>'test',
    );
}

/*Функция подключающаяся к БД и выбирающая нужную таблицу */

function dbIn(){
    $res = dbParam();
        $con = mysql_connect($res['host'],$res['name'],$res['pass']);
    if(!$con) return false;
    $con = mysql_select_db($res['dbname']);
        return $con;
}

/*Функция принимающая sql запрос на вход, подключается к базе, выполняет запрос, возвращает результат*/

function dbQuery($sql){
    dbIn();
        $res = mysql_query($sql);
            if(!$res) return false;
    $mass = array();
        while($row = mysql_fetch_assoc($res))
            $mass[]=$row;
    return $mass;
}