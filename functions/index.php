<?php
/*
 * function funktsiooniNimi ($param1, $param2 ..., $paramN){
 * tegevused mis toimuvad funktsiooni sees
 * }
 */

$arv = 442158755745;
function numbriKordumine($arv, $kontrollNumber)
{
// Leia, mitu korda siin esinemas number 5;
    $numberKokku = 0;
    while ($arv != 0) {
        $number = $arv % 10;
        if ($number == $kontrollNumber) {
            $numberKokku = $numberKokku + 1; //$numberKokku++
        }
        $arv = $arv / 10;
        settype($arv, 'int');
    }
    echo 'Number '.$kontrollNumber.' esineb antud arvus ' .$numberKokku. ' korda <br>';
}
numbriKordumine(442158755745, 5);
numbriKordumine(778692136544, 7);