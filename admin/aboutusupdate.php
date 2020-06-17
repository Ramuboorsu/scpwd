<?php
include("dbconnect.php");

if(isset($_POST["Update"]))
{ 

 $id = $_POST['id'];
 echo $id;
$Activity = $_POST['Activity'];
$mainheading = $_POST['mainheading'];
$description = $_POST['description'];

  $up = mysqli_query($con,"update aboutus set Activity='$Activity',mainheading='$mainheading',description='$description' where id='$id'");

 if(mysqli_affected_rows($con) > 0)
{
    echo '<script>alert("Successfully Update");window.location.href="adminaboutus.php";</script>';
  $msg = "successfully Updated";

}
else
{
  $msgerr = "please update and click button otherwise don't click";
}


}

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

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
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
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

  function functionAlert1(msg1, myYes) {

            var confirmBox = $("#confirm1");

            confirmBox.find(".message1").text(msg1);

            confirmBox.find(".yes1").unbind().click(function() {
               confirmBox.hide();
               alert("hhh");
            });
            confirmBox.find(".yes1").click(myYes);
            confirmBox.show();

         }
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

input[type=text], input[type=password] {
  width: 30%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}


/* style for confirm box */
#confirm1 {
          margin-top:-300px;
            display: block;
            background-color: #F3F5F6;
            color: #000000;
            border: 2px solid #aaa;
            position: fixed;
            width: 300px;
            height: 200px;
            left: 50%;
            margin-left: -100px;
            padding: 10px 20px 10px;
            box-sizing: border-box;
            text-align: center;

         }
         #confirm1 button {
            background-color: #FFFFFF;
            display: inline-block;
            border-radius: 12px;
            border: 4px solid #aaa;
            padding: 5px;
            text-align: center;
            width: 60px;
            cursor: pointer;
         }
         .yes1{
          background-color: green;
            display: inline-block;
            border-radius: 12px;
            border: 4px solid #aaa;
            padding: 5px;
            text-align: center;
            width: 60px;
            cursor: pointer;
         }
         #confirm1 .message1 {
            text-align: left;
         }

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
#role{
 width: 30%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
#role:focus{
  background-color: #ddd;
  outline: none;
}
/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  margin: 8px -40px;
  border: none;
  cursor: pointer;
  font-size:16px;
  width: 10%;
  opacity: 0.9;
}

.cancelbtn {
  background-color: red;
  font-size:16px;
  color: white;
  padding: 10px 20px;
  margin: 8px 60px;
  border: none;
  cursor: pointer;
  width: 10%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}


/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>


<?php //include "widget_header.php"; ?>

</head>
<body class="has-side-panel side-panel-right fullwidth-page" data-magnified-zone=".mg_zone">
 
 <?php //include "widget_body.php"; ?>
 
 <div style="padding-top:64px; background-color:#fff" id="widget_content"  >    
 
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <!-- <div id="preloader">
    <div id="spinner">
      <img alt="" src="images/preloaders/5.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div> -->
  
  <!-- Header -->
    <?php include "adminheader.php"; ?>
  <?php include "header1.php"; ?>
  
  <!-- Start main-content -->
<div>

<form method="post">
<center>
  <div class="container">
    <h1>Update</h1>
    <div>
    </center>
    
    <?php 
    //success and failure messages
    if(isset($msg))
    {
      echo "<center><h4 style='color:green'>".$msg."</h5></center>";
    }
    elseif(isset($msgerr))
    {
      echo "<center><h4 style='color:red'>".$msgerr."</h5></center>";
    }
    elseif(isset($msg2)){
      echo "<center><h4 style='color:red'>".$msg2."</h5></center>";
    }
    ?>
    </div>
    <hr>
<?php
$id = @$_GET['id'];
$sel = mysqli_query($con,"select * from aboutus where id =$id");
while($fet = mysqli_fetch_assoc($sel))
{
$id = $fet['id'];
$Activity = $fet['Activity'];
$mainheading = $fet['mainheading'];
$description = $fet['description'];
  ?>
<center>
    <!-- <label for="psw"><b>Id</b></label>
    <br> -->
    <input type="hidden" placeholder="Enter id" value="<?php echo $id; ?>" name="id" readonly>
    <br>
    <label for="email"><b>Activity</b></label>
    <br>
    <input type="text" placeholder="Enter Email" value="<?php echo $Activity; ?>" name="Activity" required pattern="^[a-zA-Z0-9\s]{3,60000}"  title="please enter proper Activity" readonly>
    <br>
    <label for="psw-repeat"><b>Mainheading</b></label>
    <br>
    <input type="text" placeholder="UserName" value="<?php echo $mainheading; ?>" name="mainheading"  title="please Enter min 3 and max 15 letters">
    <br>
    
    <label for="ROLE"><b>Description</b></label><br>
    <textarea id="w3review" name="description" rows="14" cols="50"><?php echo $description; ?></textarea>
    <hr>
    

    <!-- <input type="submit" class="registerbtn" name="Update" value="Update">
     --><!-- <div id="confirm1">
         <div class="message1"><h2>Are u sure want to update?</h2></div>
           <input type="submit" name="Update" class="yes1" value="Yes">
            <a href="action.php?id=<?php echo $id;?>"><button class="no" style="background-color:#DD6B55;">No</button></a>

         </div> -->
      <input type="submit" class="registerbtn" name="Update" value="Update" />

    <input type="submit" formaction="addUsers.php" class="cancelbtn"  name="cancel" value="Cancel">
    </center>
  </div>
  <?php
}
  ?>
  
</form>

  <div>
        
    
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