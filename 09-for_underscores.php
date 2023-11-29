<?php

function message()
{
    echo "hello \n" ;
}
/* 
for($i = 0; $i<10; $i++){ // je l'ai mis en commentaire pour ne pas perturber le résulat
    echo message();
}
*/

for ($i = 0; $i<10; $i++)
{
    if ($i==4)
    {
        echo'_ _ _'. PHP_EOL;
        message();
        echo' _ _ _' . PHP_EOL;
    }
    else{
        message();
    }
}
message();


?>