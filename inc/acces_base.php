<?php
    $db_user='root';
    $db_name='dangernet';
    $db_mdp='root';
    static $bdd= null;
    if ($bdd==null)
    $bdd= new PDO('mysql: host=localhost; dbname='.$db_name,$db_user, $db_mdp);
    date_default_timezone_set("Africa/Nairobi");
    $link = mysqli_connect('localhost', 'root', 'root', 'dangernet');
    mysqli_set_charset($link, "utf8");
?>
