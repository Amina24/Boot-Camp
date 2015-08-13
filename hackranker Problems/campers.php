<?php

class campers
{
    function snipers($arr , $K)
    {
        $sp= 0; 
        for( $i=1 ;   $i < $K; $i++ )
         {
             $diff= $arr[$i] -$arr[$i-1]-3;
             if ($diff > 0 )
                 $sp+=ceil( $diff/2.0 );

            // echo $sp;
         }
        
        echo  $sp ;
    }
}


$amina = new campers();

$N= readLine("Total Players: ");
$K= readLine("Snipers :");

for($i =0; $i< $K ; $i++)
{
   $snip[]=  readLine("Sniper Position : ");
} 

$amina->snipers($snip, $K);



?>
