<?php
$tabel = array(
    array(
        'Username',
        'First name',
        'Last name',
        'Gender'
    )
);
$kasutajad = array(
    array(
        'alice',
        'Alice',
        'Liddell',
        'female'
    ),
    array(
        'bob',
        'Bob',
        'Builder',
        'male'
    )
);
/*foreach ($kasutajad as $kasutaja){
    foreach ($kasutaja as $info){
        echo $info.'<br>';
    }
    echo '<hr>';
}
*/

for ($i = 0; $i < count($kasutajad); $i++) {
    foreach ($kasutajad[$i] as $info) {
        if ($kasutajad[$i][3] == 'female') {
            echo '<div style="color:red">';
        } else {
            echo '<div style="color:blue">';
        }
        echo $info . '</div>';
    }
    echo '<hr>';

    echo '<table style="border-collapse:collapse">';
    for ($i = 0; $i < count($kasutajad); $i++) {
        echo '<tr style="width: 20px; text-align: center; border:solid 1px black;">';
        foreach ($tabel[$i] as $table) {
            echo '<th style="width: 20px; text-align: center; border:solid 1px black;">' . $table;
            echo '</th>';
        }
        echo '</tr>';
        foreach ($kasutajad[$i] as $info) {
            if ($kasutajad[$i][3] == 'female') {
                echo '<td style="width: 20px; text-align: center; border:solid 1px black;background:red; color:white">';
            } else {
                echo '<td style="width: 20px; text-align: center; border:solid 1px black;background:blue; color:white">';
            }
            echo $info . '</td>';
        }
    }
    echo '</table>';
}