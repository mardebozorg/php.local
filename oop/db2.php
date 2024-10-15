<?php
class Db2{
    public $table;

    public function find($id,$coloumns=null)
    {
        $coloumns=!is_null($coloumns) ? implode(',',$coloumns) : '*' ;
        $coloumns="id,name";
        echo "SELECT {$coloumns} FROM {$this->table} WHERE id={$id}";
    }
    
}

//$conect=new Db2();
//$conect->table="store";
//$conect->find(123);