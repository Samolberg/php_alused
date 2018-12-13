<?php
// tingimuslause
// if (tingimus){
// tegevused, mis toimuvad kui tingimus kehtib
// } else {
// tegevused, mis toimuvad kui tingimus ei kehti
// }

echo '<h4>Tingimuslaused</h4>';

$foor = 'roheline';

switch ($foor){
    case 'punane':
        echo '<p style="color:red">Punane!</p>';
        break;
    case 'kollane':
        echo '<p style="color:orange">Kollane!</p>';
        break;
    case 'roheline':
        echo '<p style="color:green">Roheline!</p>';
        break;
    default:
        echo '<p>miongi teine!</p>';
        break;
}