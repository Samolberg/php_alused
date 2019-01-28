<?php
/**
 * @param $hostName
 * Created by PhpStorm.
 * User: l.samolberg
 * Date: 28.01.2019
 * Time: 14:20
 */


require_once 'conf.php';
require_once 'db_fnk.php';
$iktConn = connect_db(DBHOST, DBUSER, DBPASS, DBNAME);
// insert/update tüüpi sql testimine
$sql = 'UPDATE user SET username="Ebatavaline" WHERE id=1';
$res = query($sql, $iktConn);
// select tüüpi sql testimine
$sql = 'SELECT * FROM user';
$users = getData($sql, $iktConn);
echo '<pre>';
print_r($users);
echo '<pre>';
echo 'Tere, '.$users[0]['eesnimi'].' '.$users[0]['perenimi'].'<br>';