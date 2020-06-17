<?php
session_start();
include '../dbconnect.php';
if(empty($_SESSION['userSession']) or ($_SESSION['userSession'] != 'admin') )
{
header("Location: logout.php");
}
// echo $_SESSION['userSession'];
if(isset($_POST["submit"]))
{  
$email =  $_POST["email"];
//checking email is present or not
$sql="SELECT * from novireg where email='$email'";
$res = mysqli_query($con,$sql);
$cnt = mysqli_num_rows($res);
if(mysqli_num_rows($res) == 0 )
{

$user = $_POST["username"];
$pass = $_POST["pass"];
$role =$_POST["role"];

$password = md5($pass);

// echo $password;
$ins = mysqli_query($con,"insert into novireg(email,username,role,password) values('$email','$user','$role','$password')");
if($ins)
{
  $msg = "successfully Registered";
}
else
{
  $msgerr = "something went wrong";
}


}
else
{
  $msg2 = "mail already taken";
}
}
?>

<!DOCTYPE html>
<html>

<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Office of the State Commissioner for Persons with Disabilities,
Government of Telangana" />
<meta name="keywords" content="Office of the State Commissioner for Persons with Disabilities,
Government of Telangana" />
<meta name="author" content="Office of the State Commissioner for Persons with Disabilities,
Government of Telangana" />

<!-- Page Title -->
<title>Office of the State Commissioner for Persons with Disabilities,
Government of Telangana</title>

<!-- Favicon and Touch Icons -->
 <!-- <link href="images/favicon.png" rel="shortcut icon" type="image/png"> -->
<!--<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
 -->
<!-- Stylesheet -->
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="../css/animate.css" rel="stylesheet" type="text/css">
<link href="../css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="../css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="../css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="../css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="../css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="../css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="../css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="../js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="../js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="../js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="../css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="../js/jquery-2.2.4.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="../js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="../js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="../js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
$(document).ready(function(){
    $(".btn1").click(function(){
        $("#showmore_accesibility").slideDown();
    });
    $(".btn2").click(function(){
        $("#showmore_msgsc").slideDown();
    });
}); 
</script>
<style>
#rev_slider_home, #rev_slider_home_wrapper, .tp-fullwidth-forcer
{
height: 350px !important;
}

.feature-title p {
    text-align: left;
    color: #000;
}



 .feature-title a {
    text-align: left;
    
    color: #1c0cff;
    text-decoration: underline;
}

.feature-box {
    
    height: 460px;
} 
li.ccpd_bg, .cont_txt {
    text-align: left;
  list-style: disc;
}
a:hover, a:focus {
    color: #009fff;
    text-decoration: underline !important;
  }
  
  .p-10 {
    padding: 10px 10px 10px 30px !important;
}


.related_links
{
    color: #1c0cff;    
    text-decoration: underline;
}
.modal-open .modal {
    margin-top: 80px;
}
</style>


<?php include "adminheader.php"; ?>

</head>


<body class="has-side-panel side-panel-right fullwidth-page" data-magnified-zone=".mg_zone">
 
 <?php //include "widget_body.php"; ?>
 
 <div style="padding-top:64px; background-color:#fff" id="widget_content"  >    
 
<!-- <div id="wrapper" class="clearfix"> -->
  <!-- preloader -->
  <!-- <div id="preloader">
    <div id="spinner">
      <img alt="" src="images/preloaders/5.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
   -->
  <!-- Header -->
  <?php include "header1.php"; ?>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider" style="margin-left: 10%;width: 78%;">
     <!--  -->
     <center><h3>Contact Details</h3>
<h5>Address: <h5>
  <h4>Mail:Example@gmail.com</h4>
     </center>
    </section>
    
  </div>
  <!-- end main-content -->
  <!-- Footer -->
  
  <?php include "adminfooter.php"; ?>
  
  <a class="scrollToTop" href="#"><img src="images/up.png"></a>
</div>

</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Chart-->
<script src="js/chart.js"></script>
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->

<?php include "../widget_footer.php"; ?>

</body>
</html>