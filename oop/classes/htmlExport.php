<?php

require_once  'oop/interfaces/canExport_i.php';

class htmlExport implements canExportInterface{

    public function export(){

        echo "data format Html";
    }

    public function print1(){

        echo "print html data";
    }

}