<?php
class DataBase{
    public $host;// данные для подключения к бд
    public $name;// данные для подключения к бд
    public $pass;// данные для подключения к бд
    public $dbname;// данные для подключения к бд
    public $connect;// результат подключения
    public $result;// результат запроса к базе
    public $mass;//массив, полученный в результате запроса
    public $row;//строка БД


    public function __construct($host, $name, $pass, $dbname)
    {

        $this->host = $host;
        $this->name = $name;
        $this->pass = $pass;
        $this->dbname = $dbname;

    }


// Подключение к БД
        public function dataBaseConnect(){
        $this->connect = mysql_connect($this->host,$this->name,$this->pass);
            if(!$this->connect){
                return false;

            }
            $this->connect = mysql_select_db($this->dbname);
            return $this->connect;
    }

// Получение всего, что есть в БД в виде массива
    /**
     * @param $sql
     * @return array
     */
    public function dataBaseAllRow($sql){

            $this->result = mysql_query($sql);
                if (!$this->result){
                    return fasle;
                }
            $this->mass =[];
            while($this->row = mysql_fetch_array($this->result)){
                $this->mass[] = $this->row;
            }
            return $this->mass;

        }
// Запрос к БД
        public function dataBaseInsert($sql){
            $this->result = mysql_query($sql);
            if(!$this->result) return false;

            return true;

        }

}

