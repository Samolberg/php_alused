<?php
/**
 * Created by PhpStorm.
 * User: l.samolberg
 * Date: 22.01.2019
 * Time: 11:02
 */
echo '<h1>Tellimine</h1>';

//lisab vormist saadud andmed muutujasse
$keraRaadius = $_GET['keRaadius'];
$keraRuumala = 4/3*3.14*pow($keraRaadius,3);
echo 'Kera ruumala on: '.$keraRuumala.'<br>';
$koonuseRaadius = $_GET['kRaadius'];
$koonuseKorgus = $_GET['kKorgus'];
$koonuseRuumala = 1/3*3.14*pow($koonuseRaadius, 2)*$koonuseKorgus;
echo 'Koonuse kõrgus on: '.$koonuseRuumala.'<br>';
$silindriRaadius = $_GET['sRaadius'];
$silindriKorgus = $_GET['sKorgus'];
$silindriRuumala = 3.14*pow($silindriRaadius,2)*$silindriKorgus;
echo 'Koonuse ruumala on: '.number_format($silindriRuumala,2).'<br>';

?>