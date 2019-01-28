<?php
/**
 * Created by PhpStorm.
 * User: l.samolberg
 * Date: 28.01.2019
 * Time: 15:26
 */

session_start();
session_destroy();
header('Location: ../index.php');