<?php
class Tweet 
{
      public $message;
     
      public $date;
       public $time;
      //public $t_id;
      public $u_id;
      public $f_tweet= "../Data/tweet_record.txt";
    /*
    public function __construct($m, $d, $t, $ui)
    {
    	$this->message= $m;
    	$this->time= $t;
    	$this->date= $d;
    	//$this->t_id= $ti;
    	$this->u_id= $ui;


    } */
    public function all_tweets($uid = '0')
    {
      $myfile = fopen($this->f_tweet, "r") or die("Unable to open file!");
        // Output one line until end-of-file
      $tweets= array();
        while(!feof($myfile)) {

            $line=  fgets($myfile);
            if( ! empty($line))
            {
              $tw =  explode("%", $line);
              //echo $uid."".$tw[3];
              //echo strcmp($uid, $tw[3]) ;
              if(strcmp(trim($uid), trim($tw[3]))==0 || $uid=== '0')
              {
                //echo "Come";
                print_r($tw);
                $tweet= new Tweet($tw[0], $tw[1], $tw[2], $tw[3]);
                $tweet->message= $tw[0];

                //echo $record= $tweet->message."%".$tweet->date."%".$tweet->time."%".$tweet->u_id;
                $tweets[]= $tweet;
              }
          }

        }
        fclose($myfile);
        return $tweets;

    }
     public function add_tweet()
    {
      

      $record= $this->message."%".$this->date."%".$this->time."%".$this->u_id;
      echo $record;
      file_put_contents($this->f_tweet, $record, FILE_APPEND | LOCK_EX);

    }
    
}

?>
