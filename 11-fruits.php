

<?php

function tableau1 ($tab){
    $tab = ["elm1", "elm2", "elm3"];
    foreach($tab as $index => $values ){
        echo "$index => $values \n";
    }
    }
tableau1($tab);

function tableau2 ($fruits){
    $fruits = ["Pasteque", "Peche", "Banane", "Pomme", "Melon"];
    foreach($fruits as $index => $values ){
        echo "$index => $values \n";
    }
    }
tableau2($fruits);

?>