<?php
abstract class onlineGatway{

     protected $options;

     public function __construct()
     {
         $this->options=array(
             'mellat'=>array(
                 'uname'=>'erter434',
                 'password'=>'rtert566'
             ),
             'saman'=>array(
                 'api_code'=>'dfgdfg45gdgdg545'
             )
         );
     }

    abstract public function sendRequest();
    abstract public function verifyRequest();
}

class Mellat extends  onlineGatway{

    private  $gatewayName;
    private $mellat_options;

    public function __construct()
    {
        parent::__construct();
        $this->gatewayName='mellat';
        $this->mellat_options=$this->options[$this->gatewayName];
    }
    public function sendRequest()
    {
        var_dump($this->mellat_options);
    }
    public function verifyRequest()
    {
        // TODO: Implement verifyRequest() method.
    }
}
$gatway=Factory::make('mellat');
$gatway->sendRequest();

class Factory{
    public static function  make($class)
    {
        $className=ucfirst($class);
        if(!class_exists($className)){
            return false;
        }
        return new $className;
    }
}
