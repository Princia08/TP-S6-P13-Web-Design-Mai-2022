<?php
include_once '../inc/dbconfig.php';

if (isset($_POST['btn-save'])) {
    // variables for input data
    $nom = $_POST['nom'];
    $photo = $_POST['photo'];
    $description = $_POST['description'];
    $url = $_POST['url'];
    // variables for input data

    // sql query for inserting data into database

    $sql_query = "INSERT INTO rechauffement (`nom`,`photo`,`description`,`url`) VALUES('" . $nom . "','" . $photo . "','" . $description . "','" . $url . "')";
    var_dump($sql_query);
    // sql query for inserting data into database

    // sql query execution function
    if (mysqli_query($con, $sql_query)) {
?>
        <script type="text/javascript">
            alert('rechauffement added Successfully ');
            window.location.href = 'crud.php';
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert('error occured while inserting your data');
        </script>
<?php
    }
    // sql query execution function
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
        <div id="body">
            <div id="content">
                <form method="post" enctype="multipart/form-data">
                    <table align="center">
                        <tr>
                            <td align="center"><a href="crud.php">back to main page</a></td>
                        </tr>



                        <tr>
                            <td>
                                <input type="text" class="form-control" id="nom" name="nom" required placeholder="Nom">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="form-control" id="photo" name="photo" required placeholder="Photo">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="form-control" id="description" name="description" required placeholder="Description">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="form-control" id="url" name="url" required placeholder="Url">
                            </td>
                        </tr>




                        <tr>
                            <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

    </center>
</body>

</html>