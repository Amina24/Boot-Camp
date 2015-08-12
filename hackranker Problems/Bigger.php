<?php 

class Greater
{
    function Bigger($str)
    {

        $len= strlen($str);

        for($i=0; $i< $len ; $i++)
        {
           $arr[]=  ord( $str[$len]);
        }
        $len=-2;
        for(; $len>=0; $len--)
        { 
           $ch1=  ord( $str[$len]);
           $ch2=  ord( $str[$len-1]);
           if ( $ch1 > $ch2 )
           {
               $temp= $str[$len];
               $str[$len]= $str[$len-1];
               $str[$len-1]= $temp;
               echo $str."\n"; 
               return ;

           }
        }
        echo "no answer \n";
    }
}

$amina= new Greater();

$count= readLine("Total Words:  ");
for($i=0; $i<$count; $i++)
{
    $word[]= readLine("\nWord : ");
}

for($i=0; $i<$count; $i++)
{   
    $amina->Bigger($word[$i]);
}


?>
