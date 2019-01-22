<?php
/**
 * Created by PhpStorm.
 * User: l.samolberg
 * Date: 22.01.2019
 * Time: 13:35
 */
date_default_timezone_set('Europe/Tallinn');
echo date('d.m.Y G:i' , time()).'<br>';
//kuude massiiv
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//kuupäeva väljastamine
echo $paev.'.'.$kuu.' '.$aasta;
?>