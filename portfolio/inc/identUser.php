<?php
class identUser
{
    // public function __construct($login,$pas)
    // {
    //     $this->login = $login;
    //     $this->pas = $pas;
    // }

    public $login;
    public $pas;
    public $tablename;
    private $conn;


    public function existDatabase(){
        $localhost = "localhost";
        $username = "fact";
        $password = "173006dr";
        $dbname = "PortfolioIdentification";
        $tablename = "loginPass";
        $this->tablename = $tablename;

        $this->conn = mysqli_connect($localhost,$username,$password);
        mysqli_set_charset($this->conn,'UTF8');
    
        $sql = mysqli_query($this->conn,"SELECT COUNT(*) as count FROM information_schema.SCHEMATA WHERE SCHEMA_NAME LIKE '".$dbname."'")  ;
        $temp=mysqli_fetch_assoc($sql);
        if($temp['count']==="0"){
            mysqli_query($this->conn,"create database ".$dbname.""); //создание новой базы
            mysqli_select_db($this->conn,$dbname);
            $query = mysqli_query($this->conn,"SHOW TABLES FROM ".$dbname." LIKE '".$tablename."'");
            $result = mysqli_fetch_assoc($query);
            if(is_null($result)){
                mysqli_query($this->conn,"CREATE table ".$tablename."(
                                    id int not null Auto_increment,
                                    login varchar (30),
                                    pass varchar(50),
                                    PRIMARY KEY(id))");
    
            }
            mysqli_query($this->conn,"INSERT INTO $tablename( login,pass) VALUES ('admin','".md5('qwerty')."'),
                                                                                ('user','".md5('user')."'),
                                                                                ('guest','".md5('')."')");
        }else{
            mysqli_select_db($this->conn,$dbname);
        }    
        return $this->conn;
    }

    public function identification($log,$pas){
        $this->login = $log;
        $this->pas = $pas;

        $query = mysqli_query($this->conn,"select login,pass FROM ".$this->tablename." where login = '".$log."'");
        $result = mysqli_fetch_assoc($query);
        return $result["pass"]==$pas;
    }

    public function listOfUsers(){
        $query = mysqli_query($this->conn,"select login FROM ".$this->tablename);
        return mysqli_fetch_all($query);
    }

    public function outputBase(){
        mysqli_close($this->conn);
    }

}
