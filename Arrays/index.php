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

//massiivi pikkus
$kasutajadKokku = count($kasutajad);
for($i = 0; $i < $kasutajadKokku; $i++){
    echo $kasutajad[$i].'<br>';
}

array_shift($kasutajad);
for($i = 0; $i < $kasutajadKokku; $i++){
    echo $kasutajad[$i].'<br>';
}

$uuedKasutajad = array_merge($kasutajad, $lisaKasutajad);
for($i = 0; $i < $uuedKasutajad; $i++){
    echo $uuedKasutajad[$i].'<br>';
}