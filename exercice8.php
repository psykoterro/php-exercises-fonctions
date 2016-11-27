<?php
/**
 * Created by PhpStorm.
 * User: meg4r0m
 * Date: 27/11/16
 * Time: 22:19
 */
$nb1 = 0;
$nb2 = 0;
$nb3 = 0;

function Calcul($nb1,$nb2,$nb3){
    $resultat = $nb1+$nb2+$nb3;
    return $resultat;
}

echo "Test 1+1+1: ".Calcul(1,1,1)."<br />";
echo "Test 1+rien+1: ".Calcul(1,"",1)."<br />";
echo "Test rien+rien+rien: ".Calcul("","","");