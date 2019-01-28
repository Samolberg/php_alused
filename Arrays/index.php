
<?php
$an_array = array('a', 'b', 'c');
while (count($an_array)) {
    $val = array_shift($an_array);
    print $val . '<br>';
    print 'There are '.count($an_array).' elements in '.$an_array.'<br>';
}
?>
