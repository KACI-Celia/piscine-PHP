<?php
function big($number1, $number2)
{
    if($number1>$number2)
    {
        return "$number1  \n";
    }

    else{
        return "$number2  \n"; 
    }
    
}
echo big(10, 5);


?>