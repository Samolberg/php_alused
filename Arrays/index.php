<html>
<head>
    <title>Listing 7.3</title>
</head>
<body>
<?php
$character = array(array('name'=> 'Bob', 'occupation'=> 'superhero', 'age'=>30, 'special power'=> 'x-ray vision'), array('name'=> 'Sally', 'occupation'=> 'superhero', 'age'=>24, 'special power'=> 'superhuman strength'), array('name'=> 'Mary', 'occupation'=> 'arch villain', 'age'=>63, 'special power'=> 'nanotechnology'));
foreach ($character as $val) {
    foreach ($val as $key => $final_val) {
        print $key . ': ' . $final_val . '<br>';
    }
    print '<br>';
}
?>


</body>

</html>