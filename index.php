<?php

require_once "oop/classes/jsonExport.php";
require_once "oop/classes/htmlExport.php";

$export="Json";
$handler=$export."Export";

$handlerObject=new $handler;
//$handlerObject->export();
//var_dump($handlerObject);


class exportHandler{
    public function doExport(canExportInterface $handler){
       $handler->print1();
    }
}

$object=new exportHandler();
$object->doExport($handlerObject);

     