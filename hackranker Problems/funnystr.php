<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

class FunnyStr
 {
    function funny ($str)
    {
       // echo $str;
        $str1= strrev($str);
        //echo $str1;
        $len= strlen($str);
        for($i=1; $i<$len ;)
        {
            if (abs(ord($str[$i])-ord($str[$i-1])) == abs(ord($str1[$i])-ord($str1[$i-1])))
                
            {
                $i++;
            }
            else
            {
                echo "not funny";
                return;
            }

        }
        echo "funny"; 
    }
}


 $ab= new funnyStr();

$count =readLine("how many times : ");

for($i=1;  $i< $count+1 ;  $i++)
{
   $word[]= readLine("Word".$i." :  " );
}


for($i=0;  $i< $count ;  $i++)
{
    $ab->funny($word[$i]);
}
?>      
