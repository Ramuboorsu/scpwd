<?php 
include '../dbconnect.php';
//image update
if(isset($_POST['insert']))
 {

  $sel = mysqli_query($con,"select * from headerfooter");
while($fet = mysqli_fetch_assoc($sel))
{

$image1 = $fet['image1'];

$image2 = $fet['image2'];
$image3 = $fet['image3'];

$image4 = $fet['image4'];

$image5 = $fet['image5'];
}

  echo $_FILES['file1']['name'];  
 $output_dir = "../images/banner/";
 $output_dir2 = "../images/";
  $target_file = $output_dir;

  $filename1 = $_FILES['file1']['name'];
  if($filename1 == '' )
  {
    $filename1 = $image1;
  }
  $filename2 = $_FILES['file2']['name'];
  if($filename2 == '' )
  {
    $filename2 = $image2;
  }
  $filename3 = $_FILES['file3']['name'];
  if($filename3 == '' )
  { 
    $filename3 =$image3;
  }
  $filename4 = $_FILES['file4']['name'];
  if($filename4 == '' )
  {
    $filename4 =$image4;
  }
  $filename5 = $_FILES['file5']['name'];
  if($filename5 == '' )
  {
    $filename5 = $image5;
  }

 $pathfullname =  $target_file;
   $pathfullname2 = $output_dir2;
  // Upload file
  if(move_uploaded_file($_FILES['file1']['tmp_name'],$pathfullname.$filename1) or move_uploaded_file($_FILES['file2']['tmp_name'],$pathfullname2.$filename2) or  move_uploaded_file($_FILES['file3']['tmp_name'],$pathfullname2.$filename3) or move_uploaded_file($_FILES['file4']['tmp_name'],$pathfullname2.$filename4) or  move_uploaded_file($_FILES['file5']['tmp_name'],$pathfullname.$filename5 )){

           $insert_img = mysqli_query($con,"update headerfooter SET image1='$filename1',image2='$filename2',image3='$filename3',image4='$filename4',image5='$filename5'");
echo '<script>alert("image uploaded");</script>';
      
          }
           

} 
//end of image update

//text update
if(isset($_POST['update']))
 {
  $text1 = mysql_real_escape_string($_POST['text1']);


$text3 = mysql_real_escape_string($_POST['text3']);

$text4 = mysql_real_escape_string($_POST['text4']);

$text5 = mysql_real_escape_string($_POST['text5']);

// echo '<script>alert("'.$text1.'");</script>';
// echo '<script>alert("'.$text3.'");</script>';
// echo '<script>alert("'.$text4.'");</script>';
// echo '<script>alert("'.$text5.'");</script>';

           $insert_txt = mysqli_query($con,"update headerfooter SET text1='$text1',text3='$text3',text4='$text4',text5='$text5'");
           if($insert_txt)
           {
echo '<script>alert("text updated");</script>';
}
else
{
  echo '<script>alert("text not updates");</script>';
}

} 


//end text update
if(isset($_POST['delete'])){
$id = $_POST['id'];
    $del = mysqli_query($con,"delete from gallerytable where id = $id");
    if($del)
    {
        echo '<script>window.location.href="imgupload.php";</script>';

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
  <?php include "adminheader.php"; ?>
  <?php include "header1.php"; ?>
  <link href="../css/style.css" rel="stylesheet">
  <script>
function functionAlert1(msg1, myYes) {
            var confirmBox = $("#confirm1");
            confirmBox.find(".message1").text(msg1);
            confirmBox.find(".yes1").unbind().click(function() {
               confirmBox.hide();
            });
            confirmBox.find(".yes1").click(myYes);
            confirmBox.show();
         }

function myFunction() {
  document.getElementById("myForm").reset();
}
</script>
  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<style>
    * {
  box-sizing: border-box;
}
/* style for input fields and select option */
/* input,select { */
input{
  display: inline-block;
  float: left;

}
/*style for label names */
label{
display: inline-block;
    float: left;
    font-size:16px;
    clear: left;
    width: 250px;
    text-align: right;
    margin:20px 20px;
}

/* Add padding to containers */
.containerReg {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
#role{
 width: 50%;
  padding: 15px;
  margin: 0px 70px 20px 0px;
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
  padding: 16px 20px;
  margin: 8px 340px;
  border: none;
  cursor: pointer;
  width: 30%;
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
  width: 30%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
  background-color:red;
  margin:60px 60px;
}
.column2 {
  float: left;
  width: 60%;
  padding: 10px;
  height: auto; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


  /* style for confirm buttons */
  #confirm {
            display: none;
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
         #confirm button {
            background-color: #FFFFFF;
            display: inline-block;
            border-radius: 12px;
            border: 4px solid #aaa;
            padding: 5px;
            text-align: center;
            width: 60px;
            cursor: pointer;
         }
         #confirm .message {
            text-align: left;
         }
         #confirm1 {
          margin-top:-300px;
            display: none;
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
    
    .dropdown-content a:hover {background-color: #ddd;}
    
    .dropdown:hover .dropdown-content {display: block;}
    
    .dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>

</head>
<body>
    <center><h3>Header Content</h3></center>
  <div>
<div class="row">
<center>
  <div class="column" style="background-color:white;">
    
  <h4>Upload Images</h4>
    <hr>
    <?php
    $sel = mysqli_query($con,"select * from headerfooter");
while($fet = mysqli_fetch_assoc($sel))
{
$id = $fet['id'];
$image1 = $fet['image1'];
$text1 = $fet['text1'];
$image2 = $fet['image2'];
$image3 = $fet['image3'];
$text3 = $fet['text3'];
$image4 = $fet['image4'];
$text4 = $fet['text4'];
$image5 = $fet['image5'];
$text5 = $fet['text5'];
  ?>
  <center>
<form method='post'  enctype='multipart/form-data'>
  <h5>Image 1</h5>
 
 <input type="file" name="file1" id="file" value="<?php echo $image1; ?>">
 <br>
  <hr>

 <h5>Image 2</h5>

 <input type="file" name="file2" id="file" value="<?php echo $image2; ?>">
 <br>
   <hr>
 <h5>Image 3</h5>
 
  <input type="file" name="file3" id="file" value="<?php echo $image3; ?>">
  <br>
   <hr>
 <h5>Image 4</h5>
 
  <input type="file" name="file4" id="file" value="<?php echo $image4; ?>">
  <br>
   <hr>
 <h5>Image 5</h5>
 
  <input type="file" name="file5" id="file" value="<?php echo $image5; ?>" multiple>
  <br>
   <hr>
<input type='submit' name='insert' value='Upload'>

</form>
</center> 
<?php
}
?>
  </div>
  <div class="column2" style="background-color:white;">
  <br><br>
  <h3>Users List</h3>
 
    <hr>
<!--     <div id="confirm1">
         <div class="message1"><h4>Are u sure want to update?</h4></div>
           <input type="submit" name="Update" class="yes1" value="Yes">
            <a href="headerupdate.php?id=<?php echo $id;?>"><button class="no" style="background-color:#DD6B55;">No</button></a>

         </div> -->
<?php

$sel = mysqli_query($con,"select * from headerfooter");
while($fet = mysqli_fetch_assoc($sel))
{
$id = $fet['id'];
$image1 = $fet['image1'];
$text1 = $fet['text1'];
$image2 = $fet['image2'];
$image3 = $fet['image3'];
$text3 = $fet['text3'];
$image4 = $fet['image4'];
$text4 = $fet['text4'];
$image5 = $fet['image5'];
$text5 = $fet['text5'];
  ?>
<center>
  <form method="post">
    <!-- <label for="psw"><b>Id</b></label>
    <br> -->
    <input type="hidden" placeholder="Enter id" value="<?php echo $id; ?>" name="id" readonly>
    <br>
    <label for="img1"><b>Image1:</b></label>
    <input type="text" placeholder="Enter 1st Image Name" value="<?php echo $image1; ?>" name="image1">
    <br>
    <label for="text1"><b>Text1:</b></label>
    <input type="text" placeholder="Enter Text Here" value="<?php echo $text1; ?>" name="text1">
    <br>
    
    <label for="img2"><b>Image2:</b></label>
    <input type="text" placeholder="Enter 2nd Image Name" value="<?php echo $image2; ?>" name="image2">
    <br>

    <label for="img3"><b>Image3:</b></label>
    <input type="text" placeholder="Enter 3rd Image Name" value="<?php echo $image3; ?>" name="image3">
    <br>

    <label for="text3"><b>Text3:</b></label>
    <input type="text" placeholder="Enter Text Here" value="<?php echo $text3; ?>" name="text3">
    <br>

    <label for="img4"><b>Image4:</b></label>
    <input type="text" placeholder="Enter 4th Image Name" value="<?php echo $image4; ?>" name="image4">
    <br>

    <label for="text4"><b>Text4</b></label>
    <input type="text" placeholder="Enter Text Here" value="<?php echo $text4; ?>" name="text4">
    <br>

    <label for="img5"><b>Image5</b></label>
    <input type="text" placeholder="Enter 5th Image Name" value="<?php echo $image5; ?>" name="image5"> 
    <br>

    <label for="text5"><b>Text5</b></label>
    <input type="text" placeholder="Enter Text Here" value="<?php echo $text5; ?>" name="text5">
    <hr>
    

    <!-- <input type="submit" class="registerbtn" name="Update" value="Update">
     -->
      <input type="submit" name="update" class="registerbtn" value="Update" />
    </center>
  </div>
  <?php
}
  ?>
  
</form>
  </div>
</div>
<?php include "adminfooter.php";
?>
 </body>
</html>
            