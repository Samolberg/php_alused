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
$sp = mktime(18,14,4,11,21,1979);
echo date('d.m.Y', $sp).'<br>';
echo date('d.m.Y G:i' , time()+2000).'<br>';
echo date('d.m.Y G:i' , time()+2500*150).'<br>';
echo date('d.m.Y G:i' , time()+59*120*954).'<br>';
echo strtotime("+12 week 5 days 2 hours 20 seconds").'<br>';
?>