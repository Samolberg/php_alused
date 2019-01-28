
<?php
$first = array('a', 'b', 'c', 'd', 'e', 'f');
$second = array_slice($first, 2, 3);
foreach ($second as $var) {
    print $var.'<br>';
}
?>
