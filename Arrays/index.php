
<?php
$first = array('a', 'b', 'c');
$total = array_push($first, 1, 2, 3);
print 'There are '.$total.' elements in '.$first;
foreach ($first as $val) {
    print $val . '<br>';
}
?>
