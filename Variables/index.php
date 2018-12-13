<?php
// muutujate defineerimine
// $muutujaNimi = väärtus;

$taisArv = 7;
$reaalarv = 3.14;
$sone ='7';
$toevaartusTrue = true;
$toevaartusFalse = false;
//False väljastab tühja kirjelduse

echo 'Täisarv = '.$taisArv.'<br>';
echo 'Reaalarv = '.$reaalarv.'<br>';
echo 'Sõne = '.$sone.'<br>';
echo 'TõeväärtusTrue = '.$toevaartusTrue.'<br>';
echo 'TõeväärtusFalse = '.$toevaartusFalse.'<br>';

echo gettype($sone).'<br>';
settype($sone, 'int');
echo gettype($sone).'<br>';
