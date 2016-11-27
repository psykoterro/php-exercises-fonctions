<?php
/**
 * Created by PhpStorm.
 * User: meg4r0m
 * Date: 27/11/16
 * Time: 22:09
 */
function AgeGenre($age,$genre){
    if ($genre == "Homme"){
        if ($age >= 18){
            return "Vous êtes un homme et vous êtes majeur";
        }elseif ($age < 18){
            return "Vous êtes un homme et vous êtes mineur";
        }
    }elseif ($genre == "Femme"){
        if ($age >= 18){
            return "Vous êtes une femme et vous êtes majeur";
        }elseif ($age < 18){
            return "Vous êtes une femme et vous êtes mineur";
        }
    }
}

echo "Test Homme 18 Ans: ".AgeGenre(18, "Homme")."<br />";
echo "Test Homme 10 Ans: ".AgeGenre(10, "Homme")."<br />";
echo "Test Femme 18 Ans: ".AgeGenre(18, "Femme")."<br />";
echo "Test Femme 10 Ans: ".AgeGenre(10, "Femme");