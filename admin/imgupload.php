<?php 
include '../dbconnect.php';
if(isset($_POST['submit'])){
 $output_dir = "../images/gallery/";
 // $target_file = $output_dir . basename($_FILES['file']['name'][0]);
  $target_file = $output_dir;
// print_r($_FILES);
 // Count total files
 $countfiles = count($_FILES['file']['name']);

 // Looping all files
 for($i=0;$i<$countfiles;$i++){
  $filename = $_FILES['file']['name'][$i];
 $fullname =  $target_file.$filename;
  // Upload file
  move_uploaded_file($_FILES['file']['tmp_name'][$i],$fullname);
 // $RandomNum   = time();
        
            $ImageName      = str_replace(' ','-',strtolower($_FILES['file']['name'][$i]));
            $ImageType      = $_FILES['file']['type'][$i]; /*"image/png", image/jpeg etc.*/
         
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt       = str_replace('.','',$ImageExt);
            $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'.'.$ImageExt;
            
            $ret[$NewImageName]= $output_dir.$NewImageName;
            
            $insert_img = mysqli_query($con,"insert into `gallerytable` SET `image_name`='".$NewImageName."',`image_path`='".$fullname."'");
              // $result = mysqli_array($insert_img);
 }
} 
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

  <!-- Bootstrap CSS File -->



<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
 
<!--end -->
  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">
  <script>
//datatable script
$(document).ready(function() {
    $('#example').DataTable();
} );
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
    
    .dropdown-content a:hover {background-color: #ddd;}
    
    .dropdown:hover .dropdown-content {display: block;}
    
    .dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
  
</head>
<body>
  <div>
<div class="row">
<center>
  <div class="column" style="background-color:white;">
    <br><br><br><br><br>
    <h4>Upload Images</h4>
    <hr>
<form method='post' action='' enctype='multipart/form-data'>
 <input type="file" name="file[]" id="file" multiple>

 <input type='submit' name='submit' value='Upload'>
</form>

  </div>
  <div class="column2" style="background-color:white;">
  <br><br>
  <h3>Users List</h3>
  
  <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>ImageName</th>
                <th>ImagePath</th>
                <th>Action</th>  
            </tr>
        </thead>
        <tbody>
        <?php
$sel = mysqli_query($con,"select * from gallerytable");
while($fet = mysqli_fetch_assoc($sel))
{
$id = $fet['id'];
$imgname = $fet['image_name'];
$imgpath = $fet['image_path'];
?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $imgname; ?></td>
                <td><?php echo $imgpath; ?></td>

                <td>
                  <form method="post">
                  <input type="hidden" name="id" value="<?php echo $id; ?>">
                  <input type="submit" class="btn btn-danger" name="delete" value="Delete">
                  </form>
                  <!-- <a href="galleryaction.php?id=<?php echo $id;?>" class="btn btn-primary"name="update">Update</a> -->
                 
               </td>
              
            </tr>
            <?php
}
?>
                   </tbody>
        
    </table>
    </center>
  </div>
</div>
<?php include "adminfooter.php";
?>
 </body>
</html>
            