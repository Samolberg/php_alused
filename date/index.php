<?php

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

echo '<hr>';
echo 'ülesanne 8'.'<br>';
echo date('d.m.Y G:i' , time()).'<br>';
$paevad = array(1=>'esmaspäev', 'teisipäev', 'kolmapäev', 'neljapäev', 'reede', 'laupäev', 'pühapäev');
//kuupäevad massiividesse
$paev = date('d');
$kuu = date('n');
$aasta = date('Y');


function kuu()
{
    $paevanimi = date('l');
    if ($paevanimi == 'Monday') {
        echo 'Esmaspäev';
    } else if ($paevanimi == 'Tuesday') {
        echo 'Teisipäev';
    } else if ($paevanimi == 'Wednesday') {
        echo 'Kolmapäev';
    } else if ($paevanimi == 'Thursday') {
        echo 'Neljapäev';
    } else if ($paevanimi == 'Friday') {
        echo 'Reede';
    } else if ($paevanimi == 'Saturday') {
        echo 'Laupäev';
    } else if ($paevanimi == 'Sunday') {
        echo 'Pühapäev';
    }
}
echo kuu();

?>