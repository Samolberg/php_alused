<?php
/**
 * Created by PhpStorm.
 * User: l.samolberg
 * Date: 28.01.2019
 * Time: 14:44
 */
function connect_db($hostName, $dbUser, $dbPass, $dbName){
    $conn = mysqli_connect($hostName, $dbUser, $dbPass, $dbName);
    if(!$conn){
        echo 'unable to connect to MySQL<br>';
        echo mysqli_connect_error().'<br>';
        exit;
    }
    return $conn;
}