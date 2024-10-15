<?php

 interface classInterface{

     public function export();

 }

 class Htmlexport implements classInterface{

     public function export()
     {
         echo "this is html";
     }
 }
class Jsonexport implements classInterface{

    public function export()
    {
        echo "this is json";
    }
}
$className="Json";
$handler=$className."export";
$newObj=new $handler;
$newObj->export();
