<?php
require_once "db2.php";

class Db3 extends Db2{

    public static $varStatic="static var";

    public function __construct()
    {
        $this->table="store";
    }

    public function f1(){
        echo "1";
    }
    public function f2(){
        $this->f1();
        echo "<br>";
        echo "2";
    }

    


    public static function printName(){
        echo self::$varStatic;
    }
}

$f=new Db3();
$f->f2();


Db3::printName();
//static var
echo Db3::$varStatic;
//static var
