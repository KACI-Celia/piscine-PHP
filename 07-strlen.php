<?php
function longeur($str){
    $str="bonjour je suis Celia";
if(strlen($str)>10)
{   return"la chaine de caractere est longue \n";

}
else{
    return" la chaine de caractere est courte \n";
}
}
echo longeur('');

?>