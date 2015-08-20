
<?php 
//

class User
{
      public $u_id;
      public $name;
      public $phone_no;
      public $email="cc";
      public $password;
      public $tweets=0;
      public $f_user= "../Data/user_record.txt";


	public function checkUser($e, $p)
    {
    	
        $myfile = fopen($this->f_user, "r") or die("Unable to open file!");
        // Output one line until end-of-file

        while(!feof($myfile)) {

            $line=  fgets($myfile);
            $user =  explode(",", $line);



            //echo $line . "\n";
            if (count($user) > 2)
            {
 
                if($user[2]===$e)
                {
                    if($user[3]===$p)
                    {
                        fclose($myfile);
                        
	                	$this->u_id= $user[0];
	                	$this->name= $user[1];
	                	$this->phone_no= $user[2];
	                	$this->email= $user[3];
	                	$this->password= $user[4];
	                	$this->tweet= 0;
                        return $this;
                    }
                } 
            }
        }

        fclose($myfile);
        return;  
    }


     public function save_user()
    {
    	//print_r($this);
    	$this->u_id= $this->name;


    	$record= "\n".$this->u_id.",".$this->name.",".$this->phone_on.",".$this->email.",".$this->password.",".$this->tweets;
    	echo $record;
    	file_put_contents($this->f_user, $record, FILE_APPEND | LOCK_EX);
    }


/*
      public function __construct($u, $n, $ph, $e, $p)
      {
      	$this->u_id= $u; 
      	$this->name= $n;
      	$this->phone_no= $ph;
      	$this->email= $e;
      	$this->password= $p;
      } */
	  
}

?>
