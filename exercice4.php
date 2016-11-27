<?php
/**
 * Created by PhpStorm.
 * User: meg4r0m
 * Date: 27/11/16
 * Time: 21:58
 */
function Difference($nb1,$nb2){
    if ($nb1 > $nb2){
        return "Le premier nombre est plus grand";
    }elseif ($nb1 < $nb2){
        return "Le premier nombre est plus petit";
    }elseif ($nb1 == $nb2){
        return "Les deux nombres sont identiques";
    }
}

echo "Test 1 et 2: ".Difference(1,2)."<br />";
echo "Test 2 et 1: ".Difference(2,1)."<br />";
echo "Test 1 et 1: ".Difference(1,1);