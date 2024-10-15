<?php

require_once  'oop/interfaces/canExport_i.php';

class JsonExport implements canExportInterface{

    public function export(){

        echo "data format json";
    }

    public function print1(){

        echo "print json data 1";
    }

}

