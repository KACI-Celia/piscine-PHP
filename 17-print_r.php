<!-- # Créez une fonction nommée 'r' qui prend un paramètre. 
# Cette fonction devrait être réutilisable afin d'abréger l'utilisation 
# de 'print_r()'. -->

<?php
function r($print){
    $print = "le meilleur remède, c'est le sport";
    print_r($print);
}
echo r($print);


?>