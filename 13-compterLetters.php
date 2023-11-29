<!-- 
    # Créez une fonction qui prend en paramètre une lettre 
# Et une chaîne de caractères. La fonction doit retourner le nombre d'occurrences 
# De la lettre dans la chaîne, sans distinction de casse. 
# Utilisez la fonction avec une lettre et une chaîne de texte de votre choix. 
# Affichez le résultat dans le terminal.
 -->
 <?php
function comptage($letter, $string){
    $letter= 'l';
    $string='Bonjour nous allons voir les boucles';
    return substr_count("Bonjour nous allons voir les boucles", "l");
    } 
    echo substr_count("Bonjour nous allons voir les boucles", "l");
?>



