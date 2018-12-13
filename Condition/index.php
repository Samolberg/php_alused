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
    echo '<p style="color:green">'.$arv.'</p>';
} else if ($arv > 25 and $arv < 50) {
    echo '<p style="color:red">'.$arv.'</p>';
} else if ($arv > 50 and $arv < 75) {
    echo '<p style="color:orange">'.$arv.'</p>';
} else if ($arv > 75 and $arv < 100) {
    echo '<p style="color:black">'.$arv.'</p>';
}