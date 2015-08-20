
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
        echo "    ***** Enter 3 for Exit. *****\n\n";
        
        echo "    ***** Ente ur choice :   ";

        $choice= readLine();

        switch($choice)
        {
        case 1 :
            $this->login();
            break;

        case 2:
            $this->signup();
            break;

        case 3:
            return;

        }


    }

    public function login()
    {
        $user= new User();
        do{


            echo "\n\n**********  Twitter Login ***********\n\n" ; 
            $email= $this->input("Email");    
        	$password=$this->input("Password");

            // echo $email."\n".$password;
            $user = $user->checkUser($email, $password);

           


            if( empty($user) )
            {
                 echo "Email or Password is In valid, Please Try Again. ";
                 echo "\n\n**********  Do u want to continue Login (y/n) ***********\n\n" ; 
                $input= readLine();
             }
             else
             {
            	//echo $user[0];

            	 //$this->login_user= new User($user[0], $user[1], $user[2], $user[3],$user[4]);
                echo "Welcome ".$user->name;
             //   print_r($user);

                

         		$this->profile($user);
                $input= 'n';
            }
           

        }while($input!='n' && $input!='N');

    }
    public function input($string)
    {
    	 echo "    ***** Ente your $string :   ";
        do 
        {

	        $temp= trim( readLine());
	        if (empty($temp))
            {


        		echo " Please Enter your String (required):  ";
            }

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
        
         $user->save_user( );
         
         $this->profile($user);
        
    }

   
    public function profile($user)
    {
    	echo $user->u_id  ;

    	//.",".$user->name.",".$user->phone_no.",".$user->email.",".$user->password.",".$user->tweet;
    	
    	echo "**********  Welcome ".$user->name." ***********\n\n" ; 
    //	echo "*********  Your total Tweets  ".$user->tweet. "   *******";



        do
        {

        echo "\n    ***** Press 1 to show all Tweets. *****\n";
        echo "    ***** Press 2 for your Tweets *****\n";
        echo "    ***** Press 3 Settings  *****  \n";
         echo "    ***** Press 4 for Add Tweet  *****  \n";
          echo "    ***** Press 5 for Logout  *****  \n";
         

         echo "    ***** Ente ur choice :   ";


        $choice= readLine();

        $t=new Tweet();
        switch($choice)
        {
        case "1" :
            $tweets= $t->all_tweets();
            $this->display_tweets($tweets);
            break;

        case "2":
            $tweets= $t->all_tweets($user->u_id);

            $this->display_tweets($tweets);
            break;

        case "3":
            $this->settings($user->u_id);
            break;
        case 4:


            $t->message= $this->input("Message for Tweet ");
            
            echo $t->date =date("d-m-y");
            echo $t->time =date("h:i:sa");
            $t->u_id= $user->u_id;



        	$t->add_tweet( );
        	echo "Successfully Added ";
        	break;

       	case 5:
 
         	echo " --------------    ALLAH Hafiz  ----------------\n ";
            return;

        default :

            echo "\n\n**********  Do Enter wrong input try again ***********\n\n" ; 
         

            }
        }while(24);
    }
    public function display_tweets($tweets)
    {

    	echo $size= count($tweets);
    	for ($i=0; $i<$size ; $i++)
    	{
    		echo "\n\n\n========  Post $i ========\n\n";
    		echo "Message :  ".$tweets[$i]->message."\n\n";
    		echo "Post at Date : ".$tweets[$i]->date."     Time :  ".$tweets[$i]->time;
    	}

    }
   
    public function settings()
    {
        echo "Settings";

    }
}

$amina= new Tweeter();
$amina->WelcomePage();


?>
