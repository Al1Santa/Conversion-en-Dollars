<?php

// //  ce code converti 42 euros en dollars
// $amount = 42;
// // var_dump($amount);
// $euro = 1;
// $dollars = 1.14;

// $amountInDollars = $amount*$dollars/$euro;

// echo "la valeur en dollars de 42euros est " .$amountInDollars . "$";

#############################################################################
#############################################################################
#############################################################################
#############################################################################


// // Convertir c'est bien mais une fonction c'est mieu 

// function getAmountInDollars(){

//     $amount = 42;
//     //var_dump($amount);
//     $amountInDollars = $amount*1.14/1;
//     return $amountInDollars;
    
// }

#############################################################################
#############################################################################
#############################################################################
#############################################################################



// function getAmountInDollars(  $amount = 42){

  
//     //var_dump($amount);
//     $amountInDollars = $amount*1.14/1;
//     return $amountInDollars;
    
// }

// $dollars = getAmountInDollars();
// // var_dump($dollars);

// echo " le montant en dollar de 42€ est " .getAmountInDollars() . "$";


#############################################################################
#############################################################################
#############################################################################
#############################################################################


//  Récupérer un paramètre GET

// appeler ce fichier avec un paramètre GET
// ?number=456
// on appelle ça aussi un paramètre d'URL

// sans filtre :
$numberToConvert = $_GET['number'];
// // echo $numberToConvert;
// echo "sans filtre : ";
// var_dump($numberToConvert);
//  ici on peut écrire n'importe quoi dans l'url


// avec filtre :
$numberToConvert = filter_input(INPUT_GET, 'number', FILTER_VALIDATE_FLOAT);
echo "avec filtre : ";
var_dump($numberToConvert);
// Ici si on écrit une chaine de caractère il retourne false


#############################################################################
#############################################################################
#############################################################################
#############################################################################

// Convertion en YEN  

// on peut donner un nombre a convertir directement dans l'url 

// var_dump($numberToConvert);
function getAmountInYen($amount){

  
    //var_dump($amount);
    $amountInDollars = $amount*126;
    return $amountInDollars;
   
    
}
getAmountInYen($numberToConvert);

$Yen = getAmountInYen($numberToConvert);
// var_dump($dollars);
echo " le montant en Yen est de " . $Yen ;
