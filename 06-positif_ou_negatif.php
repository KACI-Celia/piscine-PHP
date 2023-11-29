<?php

function nombre($number){
    if($number>0)
    {
        return "le nombre est positif \n";
    }
    elseif($number<0){
        return "le nombre est négatif \n";
    }
    else{
        return" le nombre est null \n";
    }
}
echo nombre(-2) ;

?>