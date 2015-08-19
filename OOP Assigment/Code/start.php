
<?php

include_once "../classes/User.php";
include_once '../classes/Tweet.php';

class Tweeter
{

	public $f_user= "../Data/user_record.txt";
	public $f_tweet= "../Data/tweet_record.txt";

    public function __construct ()
    {



    }

    public function  WelcomePage()
    {

        echo "**********  Welcome to Twitter ***********\n\n" ; 
        echo "    ***** Enter 1 for Login. *****\n";
        echo "    ***** Enter 2 for Signup. *****\n\n";
        echo "    ***** Ente ur choice :   ";

        $choice= readLine();

        switch($choice)
        {
        case "1" :
            $this->login();
            break;

        case "2":
            $this->signup();
            break;

        }


    }

    public function login()
    {
        do{


            echo "\n\n**********  Twitter Login ***********\n\n" ; 
            $email= $this->input("Email");    
        	$password=$this->input("Password");

            // echo $email."\n".$password;
            $user = $this->checkUser($email, $password);

           


            if( $user)
            {
            	//echo $user[0];

            	 //$this->login_user= new User($user[0], $user[1], $user[2], $user[3],$user[4]);
                echo "Welcome ".$user[1];
             //   print_r($user);

                $b= new User();
                $b->u_id= $user[0];
                $b->name= $user[1];
                $b->phone_no= $user[2];
                $b->email= $user[3];
                $b->password= $user[4];
                $b->tweet= 0;

         		$this->profile($b);
                $input= 'n';
            }
            else
            {
                echo "\n\n**********  Do u want to continue Login (y/n) ***********\n\n" ; 
                $input= readLine();
            }

        }while($input!='n' && $input!='N');

    }

    public function checkUser($e, $p)
    {
        $myfile = fopen($this->f_user, "r") or die("Unable to open file!");
        // Output one line until end-of-file

        while(!feof($myfile)) {

            $line=  fgets($myfile);
            $str =  explode(",", $line);



            //echo $line . "\n";
            if (count($str) > 2)
            {
 
                if($str[2]===$e)
                {
                    if($str[3]===$p)
                    {
                        fclose($myfile);
                        return $str;
                    }
                } 
            }
        }

        fclose($myfile);

        echo "Email or Password is In valid, Please Try Again. ";
        return;


    }

    public function input($string)
    {
    	 echo "    ***** Ente your $string :   ";
        do 
        {

	        $temp= trim( readLine());
	        if (empty($temp))
        		echo " Please Enter your String (required):  ";

    	}while(empty($temp));
    	return $temp;
    }

    public function signup()
    {

        $user= new User();

        $user->name= $this->input("Name");
        $user->email= $this->input("Email");
        $user->phone_on= $this->input("Phone No.");    
        $user->password=$this->input("Password");

        do{
	        $password=$this->input("Password Again");

	        if ($user->password!= $password)
	        {
	        	$user->password=$this->input("correct Password");
	        }

		} while($user->password!= $password);

		echo "\n\n**********  Do u want to continue Signup (y/n) ***********\n\n" ; 
         $input= readLine();
            

            if ($input==='n' || $input==='N')
            	return ;
        
         $this->save_user($user);
         $this->profile($user);
        
    }

    public function save_user($user)
    {
    	//print_r($user);
    	$user->u_id= $user->name;


    	$record= $user->u_id.",".$user->name.",".$user->phone_on.",".$user->email.",".$user->password.",".$user->tweet;
    	echo $record;
    	file_put_contents($this->f_user, $record, FILE_APPEND | LOCK_EX);
    }
    public function profile($user)
    {
    	echo $user->u_id  ;

    	//.",".$user->name.",".$user->phone_no.",".$user->email.",".$user->password.",".$user->tweet;
    	
    	echo "**********  Welcome ".$user->name." ***********\n\n" ; 
    //	echo "*********  Your total Tweets  ".$user->tweet. "   *******";
        echo "    ***** Press 1 to show all Tweets. *****\n";
        echo "    ***** Press 2 for your Tweets *****\n";
        echo "    ***** Press 3 Settings  *****  \n";
         echo "    ***** Press 4 for Add Tweet  *****  \n";
          echo "    ***** Press 5 for Logout  *****  \n";
         

         echo "    ***** Ente ur choice :   ";


        $choice= readLine();

        switch($choice)
        {
        case "1" :
            $tweets= $this->all_tweets();
            $this->display_tweets($tweets);
            break;

        case "2":
            $tweets= $this->all_tweets($user->u_id);

            $this->display_tweets($tweets);
            break;

        case "3":
            $this->settings($user->u_id);
            break;
        case 4:

        	$this->add_tweet($user->u_id);
        	echo "Successfully Added ";
        	break;

       	case 5:
        		
         default : 
         	echo " --------------    ALLAH Hafiz  ----------------\n ";

        }
    }
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
    public function display_tweets($tweets)
    {

    	echo $size= count($tweets);
    	for ($i=0; $i<$size ; $i++)
    	{
    		echo "\n\n\n===============  Post $i ================\n";
    		echo "=====Message :  ".$tweets[$i]->message."\n\n";
    		echo "==Post at Date : ".$tweets[$i]->date." and   ===  Time :  ".$tweets[$i]->time;
    	}

    }
    public function add_tweet($uid)
    {
    	
    	$message= $this->input("Message for Tweet ");
    	
    	echo date("d-m-y");
    	echo date("h:i:sa");

    	$tweet= new Tweet($message, date("d-m-y"), date("h:i:sa"), $uid );



    	$record= $tweet->message."%".$tweet->date."%".$tweet->time."%".$tweet->u_id;
    	echo $record;
    	file_put_contents($this->f_tweet, $record, FILE_APPEND | LOCK_EX);

    }
    public function settings()
    {

    }
}

$amina= new Tweeter();
$amina->WelcomePage();


?>
