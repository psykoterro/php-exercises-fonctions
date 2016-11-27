<?php
/**
 * Created by PhpStorm.
 * User: meg4r0m
 * Date: 27/11/16
 * Time: 22:07
 */
function SayHello($nom,$prenom,$age){
    return "Bonjour ".$nom." ".$prenom.", tu as ".$age." ans.";
}

echo SayHello("Durano","Florian",31);