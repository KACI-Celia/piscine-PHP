<!-- 
    # Écrivez une fonction qui prend en paramètre un tableau de nombres. 
# La fonction doit renvoyer un nouveau tableau contenant les mêmes 
# nombres, mais dans l'ordre inverse. 
# Affichez le tableau original et le tableau inversé dans le terminal
 -->

<?php
/* 
function inverseTableau($a){
    $a= array("1"=>"legpress", "2"=>"squat", "3"=>"legextention", "4"=>"deadlift");
    print_r(array ($a)) ."\n";
}

echo inverseTableau($a);

 */


function inverseTableau($a){
    $a= array("1"=>"legpress", "2"=>"squat", "3"=>"legextention", "4"=>"deadlift");
    print_r(array_reverse ($a)) ."\n";
}

echo inverseTableau($a);


?>