<menu>
    <a href="index.php">Landing</a>
    <a href="index.php?leht=tervitus">Tervitus</a>
    <a href="index.php?leht=navigatsioon">Navigeerimine</a>
    <a href="index.php?leht=kontakt">Kontakt</a>
</menu>

<?php
if(!empty($_GET['leht'])){
    $leht = htmlspecialchars($_GET['leht']);
    if(is_file($leht.'.php')){
        include($leht.'.php');
    } else {
        echo 'Ei eksisteeri, proovi uuesti!';
    }
} else {
    ?>
    <h1>Landing</h1>
    <p>Maandusid mu lehele</p>

    <?php
}
?>