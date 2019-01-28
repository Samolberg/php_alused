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
$iktConn = connect_db('localhost', 'larskris_user','userpassword', 'larskris_php');
echo '<pre>';
print_r($iktConn);
echo '</pre>';