<?php
include("dbconnect.php");
$sell = mysqli_query($con,"select * from resources_data");
while($read = mysqli_fetch_assoc($sell)){
  $sl = $read['sid'];
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
<script>
$(document).ready(function(){
  $(".update").click(function(){
    var id = $(this).attr('aid');
    var dis = $('#disability'+id).val();
     var mid =$('#men'+id).val();
      var wid = $('#women'+id).val();
       var tot = $('#total'+id).val();
    // alert(id);
    //  alert(mid);
    //   alert(wid);
    //    alert(tot);
       $.ajax({
         url: "tableupdate.php",
            type: "post",
        data : {update:1,id:id,dis:dis,mid:mid,wid:wid,tot:tot},
        success : function(data){
          alert("success");
          location.reload();
        },error:function(data)
        {
          alert("error");
        }
       })
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
  width:80px;
cursor: pointer;

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
$sel = mysqli_query($con,"select * from resources_text where id =$id");
while($fet = mysqli_fetch_assoc($sel))
{
$id = $fet['id'];
$heading = $fet['heading'];
$description = $fet['description'];
  ?>
<center>
    <!-- <label for="psw"><b>Id</b></label>
    <br> -->
    <table cellspacing=0 border=1 class="survey_table">
          <tr class="headings">
            <th style=min-width:50px>Sl.No</th>
            <th style=min-width:50px>Disability</th>
            <th style=min-width:50px>Men</th>
            <th style=min-width:50px>Women</th>
           <th style=min-width:50px>Total</th>
           <th style=min-width:50px>Action</th>
          </tr>
          <?php
              $data = mysqli_query($con,"select * from resources_data");
              while($info = mysqli_fetch_assoc($data)){
                $sl = $info['sid'];
                $disability = $info['Disability'];
                $men = $info['Men'];
                $women = $info['Women'];
                $total = $info['Total'];
              ?>
          <tr>
            <td style=min-width:50px><?php echo $sl; ?></td>
            <td style=min-width:50px>
                        <input name="disability" id="disability<?php echo $sl; ?>" value="<?php echo $disability; ?>" type="text" placeholder="Enter Disability" size="28" />
                    </td>
            <td style=min-width:50px>
                        <input name="men" id="men<?php echo $sl; ?>" value="<?php echo $men; ?>" placeholder="Product price" size="28" />
                    </td>
            <td style=min-width:50px>
                        <input name="women" id="women<?php echo $sl; ?>" value="<?php echo $women; ?>" placeholder="Product price" size="28" />
                   </td>
            <td style=min-width:50px>
                        <input name="total" id="total<?php echo $sl; ?>" value="<?php echo $total; ?>" placeholder="Product price" size="28" />
                    </td>
                     <td style=min-width:50px >
                      <input type="hidden" class="registerbtn" name="sl"  value="<?php echo $sl; ?>" />
                       <input type="buttin" class="registerbtn update"  aid="<?php echo $sl; ?>" mid="<?php echo $men; ?>" wid="<?php echo $women; ?>" tot="<?php echo $total; ?>" dis="<?php echo $disability; ?>" name="Update" value="Update" />
                    </td>
          </tr>
          <?php
}
$tot = mysqli_query($con,"select SUM(Men) as men,SUM(Women) as women,SUM(Total) as total from resources_data");
while($row = mysqli_fetch_assoc($tot)){
?>
          <tr>
            <td style="min-width:50px" colspan="2">Total</td>
            <td style=min-width:50px><?php echo $row['men']; ?></td>
            <td style=min-width:50px><?php echo $row['women']; ?></td>
            <td style=min-width:50px><?php echo $row['total']; ?></td>
          </tr>

          <?php
        }
        ?>
        </table>
<!--       <input type="submit" class="registerbtn" name="Update" value="Update" /> -->

    <input type="submit" formaction="adminresources.php" class="cancelbtn"  name="cancel" value="Cancel">
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
