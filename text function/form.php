<?php
/**
 * Created by PhpStorm.
 * User: l.samolberg
 * Date: 28.01.2019
 * Time: 12:21
 */
//echo '<h3>9.1</h3>';
//$nimi = $_GET['name'];
//echo 'Tere, '.ucfirst(strtolower($nimi));

//echo '<hr>';
//echo '<h3>9.2</h3>';
//$nimi = $_GET['name'];
//$upper = strtoupper($nimi);
//$dotter = implode('.',str_split($upper));
//echo $dotter;
//echo '<hr>';

echo '<h3>9.3</h3>';
$tekst = $_GET['tekst'];
$otsi = array('noob', 'pleb', 'feeder', 'toxic');
$asenda = '****';
echo str_replace($otsi, $asenda, $tekst);
