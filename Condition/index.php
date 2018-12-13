<?php
// tingimuslause
// if (tingimus){
// tegevused, mis toimuvad kui tingimus kehtib
// } else {
// tegevused, mis toimuvad kui tingimus ei kehti
// }

echo '<h4>Tingimuslaused</h4>';
$varv = '';
$arv = rand(0, 100); //juhuslik täisarv vahemikus 0-100

if($arv > 0 and $arv < 25){
    //antud arv on paaris ja on roheline
    $varv = 'aqua';
} else if ($arv > 25 and $arv < 50) {
    $varv = 'red';
} else if ($arv > 50 and $arv < 75) {
    $varv = 'green';
} else if ($arv > 75 and $arv < 100) {
    $varv = 'orange';
}

echo '<p style="color: '.$varv.'">'.$arv.'</p>';