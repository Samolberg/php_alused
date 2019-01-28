<html>
<head>
    <title>Listing 7.1</title>
</head>
<body>
<?php
$characters = array(array('name'=> 'Bob', 'occupation'=> 'superhero', 'age'=> '30', "special power"=> 'x-ray vision'), array( 'name'=> 'Sally', 'occupation'=> 'superhero', 'age'=> 24, 'specialty'=> 'superhuman strength'), array('name'=> 'Mary', 'occupation'=> 'arch villain', 'age'=> 63, 'specialty'=> 'nanotechnology'));

print $characters[0]['occupation'];
?>
</body>
</html>

