<?php

class candies
{

    function get_candy($arr, $count, $candy)
    {
        if ($arr[0] > $arr[1])
            $candy[0]+=1;
        for($i=1; $i<$count-1; $i++)
        {
            if ($arr[$i] > $arr[$i+1])
            {
                $candy[$i]+=1;
            }

            if ($arr[$i] > $arr[$i-1])
            {
                $candy[$i]+=1;
            }



        }
         if ($arr[$count-1] >  $arr[$count-2])
            $candy[$count-1]+=1;
       
         print_r($arr);
        
        print_r($candy);
        for($i=0, $sum=0; $i<$count; $i++)
        {
            $sum+=$candy[$i];
        }

        echo $sum;


    }

}

$amina= new candies();

    $count= readLine("Children : ");


for($i=1; $i<$count+1; $i++)
{
    $candy[]=1;
    $rate[]= readLine(" Rating of child ".$i);
    
}

    $amina->get_candy($rate, $count, $candy);



?>
