
<?php
$first = array('first'=>5, 'second'=>2, 'third'=>1);
asort($first);
foreach ($first as $key => $var) {
    print $key = $var.'<br>';
}
?>
