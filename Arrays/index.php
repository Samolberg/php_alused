<?php
$kasutajad = array(); //tühi massiiv
//andmete lisamine massiivi
$kasutajad[] = 'alice';
$kasutajad[] = 'bob';
array_push($kasutajad, 'lucy');

$lisaKasutajad = array('mark', 'george'); //andmetega massiiv
echo '<pre>';
print_r($kasutajad);
print_r($lisaKasutajad);
echo '</pre>';
//var_dump($kasutajad);