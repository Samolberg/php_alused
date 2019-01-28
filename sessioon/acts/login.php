<?php
/**
 * Created by PhpStorm.
 * User: l.samolberg
 * Date: 28.01.2019
 * Time: 15:15
 */

require_once '../db/conf.php';
require_once '../db/db_fnk.php';
// andmed HTML vormi poolt
$username = $_GET['uname'];
$password = $_GET['upass'];

$ikt = connect_db(DBHOST, DBUSER, DBPASS, DBNAME);
// küsime kasutaja andmete olemasolu andmebaasis
$sql = 'SELECT * FROM user WHERE username="'.$username.'" AND password="'.md5($password).'"';
$users = getData($sql, $ikt);
// väljastame andmed
//echo $users[0]['first_name'].' '.$users[0]['last_name'];

// loome kasutaja sessiioon, kui ta andmebaasis olemas
if($users !== false){
    session_start();
    $_SESSION['user'] = $users[0];
    header('Location: ../index.php');
}