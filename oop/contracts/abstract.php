<?php

abstract class onlineGatway{

    protected $options;

   public function __construct()
   {
       $this->options=array(

           'mellat'=>array(
               'merchant' => '23452455523',
               'username'=> 'sd456456',
               'password'=> 'fg545654'
           ),
           'saman'=>array(
               'api_key'=>'fsdggfg345dd456'
           ),
           'parsian'=>array(
               'username'=> 'gh456456',
               'password'=> 'uyuu75654'
           )
       );
   }
    abstract public function sendRequest();
    abstract public function verifyRequest();
}

class Mellat extends onlineGatway{

    private  $gatewayName;
    private $mellat_options;

    public function __construct()
    {
        $this->gatewayName='mellat';
        parent::__construct();
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

$mellat=new Mellat();
$mellat->sendRequest();