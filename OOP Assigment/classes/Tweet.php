<?php
class Tweet 
{
      public $message;
     
      public $date;
       public $time;
      //public $t_id;
      public $u_id;
    
    public function __construct($m, $d, $t, $ui)
    {
    	$this->message= $m;
    	$this->time= $t;
    	$this->date= $d;
    	//$this->t_id= $ti;
    	$this->u_id= $ui;


    }
}

?>
