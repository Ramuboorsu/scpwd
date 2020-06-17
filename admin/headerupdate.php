<?php
session_start();
include '../dbconnect.php';
if(empty($_SESSION['userSession']))
{
header("Location: logout.php");
}
?>
<style>
* {
  box-sizing: border-box;
}
.dropbtn {
      background-color: #4CAF50;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
    }
    
    .dropdown {
      position: relative;
      display: inline-block;
    }
    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    
    .dropdown-content a:hover {background-color: #ddd;}
    
    .dropdown:hover .dropdown-content {display: block;}
    
    .dropdown:hover .dropbtn {background-color: #3e8e41;}

/* labels style */
label{
display: inline-block;
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
  padding: 16px 20px;
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
  padding: 16px 20px;
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

<!DOCTYPE html>
<html>
<head>
<link href="../img/novisync_new.png" rel="shortcut icon" style="width: 100px;height: 100px">
  <title>Novisync</title>
  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<!-- bootstrap buttons
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<!--end -->



  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">
  <script>
//datatable script
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<script>
//form reset

<script>
function myFunction() {
  document.getElementById("myForm").reset();
}
</script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
      </script>
      
</head>
<body>
<?php

// $conn = mysqli_connect("localhost","root","","novireg");
$id = @$_GET['id'];
if(isset($_POST["Update"]))
{  
  $id = $_POST["id"];
$image1 =  $_POST["image1"];
$text1 = $_POST["text1"];
$image2 = $_POST["image2"];
$image3 = $_POST["image3"];
$text3 = $_POST["text3"];
$image4 = $_POST["image4"];
$text4 = $_POST["text4"];
$image5 = $_POST["image5"];
$text5 = $_POST["text5"];
//checking email is present or not
$up = mysqli_query($con,"update gallerytable set image1='$image1',text1='$text1',image2='$image2',image3='$image3',text3='$text3',image4='$image4',text4=$text4,image5=$image5,text5=$text5 where id='$id'");

}
?>

<!-- update form-->
<form method="post">
<center>
  <div class="container">
    <h1>Update</h1>
    <div>
    </center>
    </div>
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
     --><div id="confirm1">
         <div class="message1"><h2>Are u sure want to update?</h2></div>
           <input type="submit" name="Update" class="yes1" value="Yes">
            <a href="headerupdate.php?id=<?php echo $id;?>"><button class="no" style="background-color:#DD6B55;">No</button></a>

         </div>
      <input type="button" class="registerbtn" value="Update" onclick="functionAlert1();" />

    <input type="submit" formaction="imgupload.php" class="cancelbtn"  name="cancel" value="Cancel">
    </center>
  </div>
  <?php
}
  ?>
  
</form>
</body>
</html>