
<!-- # Créez une fonction qui prend en paramètre une chaîne de caractères.
# Cette fonction devrait compter le nombre de voyelles présentes dans la chaîne 
# (en considérant seulement les voyelles 'a', 'e', 'i', 'o', 'u', 'A', 
# 'E', 'I', 'O', 'U'). 
# Utilisez la fonction compterVoyelles avec une chaîne de texte de votre choix. 
# Affichez le nombre de voyelles dans le terminal. -->

<?php

function compteVoyelles($phrase){
    $phrase = 'le soleil se couche et laisse une très belle vue chaque soir';
    $voyelles = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    count_chars($phrase,3);

}

echo compteVoyelles(count_chars($phrase));
?>
