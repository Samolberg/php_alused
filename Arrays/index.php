
<?php
$first = array('a', 'b', 'c');
$second = array(1,2,3);
$third = array_merge ($first, $second);
foreach ($third as $val) {
    print $val . '<br>';
}
?>
