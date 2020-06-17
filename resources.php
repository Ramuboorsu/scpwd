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
 <link href="images/favicon.png" rel="shortcut icon" type="image/png">
<!--<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
 -->
<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<style>
#rev_slider_home, #rev_slider_home_wrapper, .tp-fullwidth-forcer
{
height: 450px !important;
}
.feature-title p, .feature-title a
{
text-align: left;
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
    
	}
	
	.p-10 {
    padding: 10px 10px 10px 30px !important;
}


.resources_content h4
{
    font-size: 16px;
}

.resources_content h3
{
        font-size: 18px;
}

</style>

<?php //include "widget_header.php"; ?>

</head>
<body class="has-side-panel side-panel-right fullwidth-page" data-magnified-zone=".mg_zone">
     <?php //include "widget_body.php"; ?>
      
<!--  <div style="padding-top:64px; background-color:#fff" id="widget_content"  >  
<div id="wrapper" class="clearfix">
   preloader -->
 <!--  <div id="preloader">
    <div id="spinner">
      <img alt="" src="images/preloaders/5.gif">
    </div> -->
  <!--   <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div></div> -->
  
  
  <!-- Header -->
  <?php include "header.php";
        include "dbconnect.php";
   ?>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    
    <section id="home" class="divider">
      <div class="container-fluid p-0">

      <div class="container">
        <div class="section-content">
          <div class="row col-md-8">
            <div class="col-md-12 resources_content">
              <?php
              $text = mysqli_query($con,"select * from resources_text");
              while($result = mysqli_fetch_assoc($text))
              {
              $id = $result['id'];
              $heading = $result['heading'];
              $description = $result['description'];
              ?>  
              <h3 class="text-uppercasetext-theme-colored mt-0 mb-0 mt-sm-30"><?php echo $heading; ?></span></h3>
             <h4 style="font-weight: 500; line-height: 30px;"><?php echo $description; ?></h4>
              <?php
              }
              ?>
              <style>
                  .survey_table td {
    padding: 10px;
    font-size: large;
color: #000;
}

 .survey_table .headings td {
    padding: 10px;
    font-size: large;
    font-weight: bold;
    color: #000;
}
              </style>
              
              <table cellspacing=0 border=1 class="survey_table">
					<tr class="headings">
						<td style=min-width:50px>Sl.No</td>
						<td style=min-width:50px>Disability</td>
						<td style=min-width:50px>Men</td>
						<td style=min-width:50px>Women</td>
						<td style=min-width:50px>Total</td>
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
						<td style=min-width:50px><?php echo $disability; ?></td>
						<td style=min-width:50px><?php echo $men; ?></td>
						<td style=min-width:50px><?php echo $women; ?></td>
						<td style=min-width:50px><?php echo $total; ?></td>
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
            </div>
            
          </div>
          
                  <div class="col-xs-12 col-sm-6 col-md-4 mb-sm-30  pb-20">  
         <?php include "side_block.php"; ?>
		 </div>
        </div>
       </div>  
      </div>
    </section>



    
  </div>
  <!-- end main-content -->
  <!-- Footer -->
  
  <?php include "footer.php"; ?>
  
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
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

<?php include "widget_footer.php"; ?>
</body>

</html>