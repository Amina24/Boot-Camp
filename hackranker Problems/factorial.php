<?php


class factorial
{

    function fact($num)
    {
        $f = 1;
        for($i=1; $i<= $num ; $i++)
        {
           $f=  bcmul($f, $i);
        }

        echo (double) $f;
        echo number_format($f, 0, '', '');
        printf("Factorial  %0.0lf \n", $f);
        return $f;

    }

}

$amina= new factorial();

$num= readLine("Enter Number : ");

$amina->fact($num);

echo $amina->fact($num-1)*$num;
?>
