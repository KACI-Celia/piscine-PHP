
<!-- # Créez une fonction nommée 'v' qui prend un paramètre. 
# Cette fonction devrait être réutilisable afin d'abréger l'utilisation 
# de 'var_dump()'. -->

<?php

function v($param) {
    $param='Bienvenue a tous';
    var_dump($param);
}
    echo v($param);


    function v2($param2) {
        $param2= 120;
        var_dump($param2);
    }
        echo v2($param2);

?>