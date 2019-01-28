<html>
<head>
    <title>Listing 7.2</title>
</head>
<body>
<?php
$character = array('name'=> 'Bob', 'occupation'=> 'superhero', 'age'=>30, 'special power'=> 'x-ray vision');
foreach ($character as $key=>$val) {
    print $key = $val.'<br>';
}
?>

</body>

</html>
