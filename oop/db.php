<?php

class Db{
    
    public $table;

    public function all()
    {
          return " SELECT * from {$this->table}";
    }

    public function find($id,$columns=null)
    {
        $columns = !is_null($columns) ? implode(',',$columns) : '*';
        $columns="id,name";
        echo " SELECT {$columns} from {$this->table} WHERE id={$id}";
    }

    public function delete($id)
    {
        return "DELETE FROM {$this->table} WHERE id={$id}";
    }
    
    private function sort(){
    }
}

$conection= new Db();
$conection ->table ="users";
$conection->find(56);
//SELECT id,name from users WHERE id=56

//طبقه بندی و کپسوله سازی کدها با کلاس
//پابلیک برای سطح دسترسی متودها داخل و بیرون کلاس
//پابلیک یعنی هم داخل و هم خارج از کلاس میتوانند استفاده کنند
//پرایوت یعنی فقط داخل خود کلاس در دسترس هستن
// راه رفتن دو انسان شبیه هم هست ولی تفاوت در پراپرتی هاست
// همه انسانها چشم دارن ولی رنگ چشم ها متفاوت هستن.
//همه کلاسهایی که از دی بی میسازیم پراپرتی تیبل را دارد ولی با هم متفائت هستن

//برای استفاده از سلکت  ستون مورد نظر را انتخاب کنید چون وقتی استار میزنیم همه را میگردد
// و زمان و حجم زیادی را میگیرد

