<?php
include_once '../inc/dbconfig.php';

if (isset($_GET['view_id'])) {
    $sql_query = "SELECT * FROM rechauffement WHERE id=" . $_GET['view_id'];
    $result_set = mysqli_query($con, $sql_query);
    $fetched_row = mysqli_fetch_array($result_set, MYSQLI_ASSOC);
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Core PHP Crud functions By PHP Code Builder</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
    <center>

        <div id="header">
            <div id="content">
                <label>AlloWorld!</label>
            </div>
        </div>

        <table align="center">
            <tr>
                <th colspan="5">nom: <?php echo $fetched_row['nom'] ?></th>
            </tr>
            <tr>
                <th colspan="5">photo: <?php echo $fetched_row['photo'] ?></th>
            </tr>
            <tr>
                <th colspan="5">description: <?php echo $fetched_row['description'] ?></th>
            </tr>
            <tr>
                <th colspan="5">url: <?php echo $fetched_row['url'] ?></th>
            </tr>
        </table>
    </center>
</body>

</html>