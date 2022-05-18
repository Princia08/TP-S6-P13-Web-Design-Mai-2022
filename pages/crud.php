<?php
include_once '../inc/dbconfig.php';

if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM rechauffement WHERE id=".$_GET['delete_id'];
 mysqli_query($con,$sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
if(isset($_GET['changestatus_id']))
{
 $sql_query="UPDATE rechauffement SET `status`='".$_GET['status']."' WHERE id=".$_GET['changestatus_id'];
 mysqli_query($con,$sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <!-- meta charec set -->
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Page Title -->
    <title>Themefisher.Free Bootstrap3 based HTML5 Templates</title>
    <link rel="stylesheet" href="style.css" type="text/css" />

    <!-- Meta Description -->
    <meta name="description" content="Blue One Page Creative HTML5 Template">
    <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
    <meta name="author" content="Muhammad Morshed">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- CSS
		================================================== -->
    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <!-- Twitter Bootstrap css -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- jquery.fancybox  -->
    <link rel="stylesheet" href="../assets/css/jquery.fancybox.css">
    <!-- animate -->
    <link rel="stylesheet" href="../assets/css/animate.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- media-queries -->
    <link rel="stylesheet" href="../assets/css/media-queries.css">

    <!-- Modernizer Script for old Browsers -->
    <script src="../assets/js/modernizr-2.6.2.min.js"></script>

    <script type="text/javascript">
        function edt_id(id) {
            window.location.href = 'edit_rechauffement.php?edit_id=' + id;
        }

        function view_id(id) {
            window.location.href = 'view_rechauffement.php?view_id=' + id;
        }

        function delete_id(id) {
            if (confirm('Sure to Delete ?')) {
                window.location.href = 'crud.php?delete_id=' + id;
            }
        }

        function changestatus_id(id, status) {
            window.location.href = 'crud.php?changestatus_id=' + id + '&status=' + status;
        }
    </script>
</head>


<body id="body">


    <!-- preloader -->
    <div id="preloader">
        <img src="../assets/img/preloader.gif" alt="Preloader">
    </div>
    <!-- end preloader -->

    <header id="navigation" class="navbar-fixed-top navbar">
			
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                    <a class="navbar-brand" href="#body">
						<strong><h2 id="logo">
							AlloWorld!
						</h2></strong>
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right">
                    <ul id="nacv" class="nav navbar-nav">
                        <li class="current"><a href="liste.php">Accueil</a></li>
                        <li><a href="crud.php">Back-Office</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>

    <!-- 
        Fixed Navigation
        ==================================== -->

    <div class="container" style="margin-bottom:15%;">
        <div class="row" >
           
<center>

<div id="body">
 <div id="content">
    <table align="center"class="table table-striped"> 
    <tr>
    <th colspan="5"><a href="add_rechauffement.php">add rechauffement.</a></th>
    </tr>
    <th>SL NO</th>
    <th>nom</th>
   
    <th colspan="3">Actions</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM rechauffement";
 $result_set=mysqli_query($con,$sql_query);
 $i=1;
 while($row=mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
        <td align="center" ><?php echo $i; ?></td>
        <td align="center" > <a href="javascript:view_id('<?php echo $row[0]; ?>')"> <?php echo $row[1]; ?> </a> </td>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')">Edit</a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')">Delete</a></td>
        </tr>
        <?php
       $i++;  
 }
 ?>
    </table>
    </div>
</div>

</center>
        </div>
    </div>


    <footer id="footer" class="footer">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
                    <div class="footer-single">
                        <h1>AlloWorld!</h1>
                        <p>Informe la population sur le réchaufement climatique, de nouvelles données toutes les semaines! Ne manquez pas ca</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="footer-single">
                        <h6>Vos avis? </h6>
                        <form action="#" class="subscribe">
                            <input type="text" name="subscribe" id="subscribe">
                            <input type="submit" value="&#8594;" id="subs">
                        </form>
                        <p>Sauvons le monde ensemble </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="footer-single">
                        <h6>Découvrez aussi!</h6>
                        <ul>
                            <li><a href="#">AlloWordFB</a></li>
                            <li><a href="#">AlloTwitt</a></li>
                            <li><a href="#">Google</a></li>
                            <li><a href="#">AlloInstagram</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="footer-single">
                        <h6>Support</h6>
                        <ul>
                            <li><a href="#">Contacter nous</a></li>
                            <li><a href="#">Market Blog</a></li>
                            <li><a href="#">Nouveauté</a></li>
                            <li><a href="#">Aide</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="copyright text-center">
                        Copyright © 2015 <a href="http://themefisher.com/">Themefisher</a>. All rights reserved. Designed & developed by <a href="http://themefisher.com/">Themefisher</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

    <!-- Essential jQuery Plugins
		================================================== -->
    <!-- Main jQuery -->
    <script src="../assets/js/jquery-1.11.1.min.js"></script>
    <!-- Single Page Nav -->
    <script src="../assets/js/jquery.singlePageNav.min.js"></script>
    <!-- Twitter Bootstrap -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- jquery.fancybox.pack -->
    <script src="../assets/js/jquery.fancybox.pack.js"></script>
    <!-- jquery.mixitup.min -->
    <script src="../assets/js/jquery.mixitup.min.js"></script>
    <!-- jquery.parallax -->
    <script src="../assets/js/jquery.parallax-1.1.3.js"></script>
    <!-- jquery.countTo -->
    <script src="../assets/js/jquery-countTo.js"></script>
    <!-- jquery.appear -->
    <script src="../assets/js/jquery.appear.js"></script>
    <!-- Contact form validation -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
    <!-- Google Map -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
    <!-- jquery easing -->
    <script src="../assets/js/jquery.easing.min.js"></script>
    <!-- jquery easing -->
    <script src="../assets/js/wow.min.js"></script>
    <script>
        var wow = new WOW({
            boxClass: 'wow', // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 120, // distance to the element when triggering the animation (default is 0)
            mobile: false, // trigger animations on mobile devices (default is true)
            live: true // act on asynchronously loaded content (default is true)
        });
        wow.init();
    </script>
    <!-- Custom Functions -->
    <script src="../assets/js/custom.js"></script>

    <script type="text/javascript">
        $(function() {
            /* ========================================================================= */
            /*	Contact Form
            /* ========================================================================= */

            $('#contact-form').validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 2
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required: true
                    }
                },
                messages: {
                    name: {
                        required: "come on, you have a name don't you?",
                        minlength: "your name must consist of at least 2 characters"
                    },
                    email: {
                        required: "no email, no message"
                    },
                    message: {
                        required: "um...yea, you have to write something to send this form.",
                        minlength: "thats all? really?"
                    }
                },
                submitHandler: function(form) {
                    $(form).ajaxSubmit({
                        type: "POST",
                        data: $(form).serialize(),
                        url: "process.php",
                        success: function() {
                            $('#contact-form :input').attr('disabled', 'disabled');
                            $('#contact-form').fadeTo("slow", 0.15, function() {
                                $(this).find(':input').attr('disabled', 'disabled');
                                $(this).find('label').css('cursor', 'default');
                                $('#success').fadeIn();
                            });
                        },
                        error: function() {
                            $('#contact-form').fadeTo("slow", 0.15, function() {
                                $('#error').fadeIn();
                            });
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>