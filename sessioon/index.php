<?php
/**
 * Created by PhpStorm.
 * User: l.samolberg
 * Date: 28.01.2019
 * Time: 15:08
 */
session_start();
require_once 'fnk.php';
//$loginForm = htmlFromFile('login');
//echo $loginForm;
if(isset($_SESSION['user'])){
    echo 'Tere tulemast, '.$_SESSION['user']['last_name'].'!<br>';
    echo '<a href="acts/logout.php">Logi välja</a>';
} else {
    $loginForm = htmlFromFile('login');
    echo $loginForm;
}