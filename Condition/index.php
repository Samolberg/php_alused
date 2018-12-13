<?php
// tingimuslause
// if (tingimus){
// tegevused, mis toimuvad kui tingimus kehtib
// } else {
// tegevused, mis toimuvad kui tingimus ei kehti
// }

echo '<h4>Tingimuslaused</h4>';

$arv = rand(0, 100); //juhuslik täisarv vahemikus 0-100

if($arv % 2 == 0){
    //antud arv on paaris ja on roheline
    echo '<p style="color:green">'.$arv.'</p>';
} else {
    echo '<p style="color:red">'.$arv.'</p>';
};