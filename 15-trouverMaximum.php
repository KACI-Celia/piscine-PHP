

<!-- # Créez une fonction qui prend en paramètre un tableau de nombres. 
# La fonction doit parcourir le tableau pour trouver et renvoyer la valeur maximale.
# Utilisez la fonction avec un tableau de nombres de votre choix. 
# Affichez la valeur maximale dans le terminal. -->

<?php

function touverMaximum($tab){
$tab = ["15", "33", "62", "120"];
return max($tab) . "\n";
}

echo touverMaximum($tab);
?>