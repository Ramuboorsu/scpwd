<?php

include('include/session.php');
?>
    <link rel="icon" href="http://www.telangana.gov.in/Style%20Library/GoT/Content/img/logo.png" type="image/png" sizes="16x16">

    <title>Office of the State Commissioner For Persons with Disabilities </title>

<style>
body{
  font-family: century gothic !important;
}
#loginForm{
  background-color: #fff;
}
.header_block{
    clear: both;
    min-height: 80px;
    z-index: 99;
    background-color: #6a1644;
}

.profile_block_menus li{
  float: left;
list-style-type: none;
width: 50%;
text-align: center;
margin-bottom: 10px;
}

.main_head{

    text-align: center;
    color: #fff;
    font-size: 9px;
    font-weight: 600;


}
.ts_logo{
      /*width: 385px;
      height: auto;*/
      margin-top: 15px;
}
.sub_head{
  clear: both;
display: block;
color:  #fabd75;
text-align:center;
font-size: 9px;
font-weight: 600;
margin-bottom:0;
}

.main_section{
  background-image: url("<?php echo SECURE_PATH; ?>assets/images/login_images/Login_BG-1.jpg");
  width: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 100px;


}

.heading{
  margin-top: 0!important;
  color: #fff;
  font-weight: 600;
}
.input_images{
  height: 14px;
  width:auto;
}

.form_pad{
  background-color: #eee;
  text-align:center;
  border-radius:6px;
  border: none;
  width: 200px;
  height: 47px;
  font-size: 17px;
}

.input_pad{
  padding: 24px 21px;
}

.btn_custom{
  /*background: #de047f;*/
  background: #0093d8;
    padding: 12px 84px;
    margin-top: 15px;
    color: #fff;
    /*width: 154px;*/
}
..btn_custom :hover {
  color: #fff;
}
.search_block{
  float: right;
    margin-top: 17px;
}
.second_block{
  background-color: #fff;
}
.img_icon{
  height:100px;
  width:auto;
}
.colored_text{
  color: #f7941d;
}
.second_block h3{
  margin: 30px 0;
}
.search_input {
    width: 100%;
    border: none;
    background-color: #0093d8;
    color: #fff;
    padding: 12px 40px 12px 10px;
    border-radius: 5px;
    font-size: 18px;
}
    .search_block1 {
        position: relative;
    }
    .icon_search {
        position: absolute;
        right: 10px;
        top: 35px;
        color: #fff;
        font-size: 18px;
        font-weight: bold;
        background-color: transparent;
        border: none;
    }
.btn_custom1{
margin-left : -18px;
}
</style>
<?php echo $session->commonCSS();?>
	<link rel="stylesheet" href="<?php echo SECURE_PATH; ?>css/colors.css">
  <link rel="stylesheet" href="<?php echo SECURE_PATH; ?>css/dwdsc-color.css">
          <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   
 <?php echo $session->commonJS();?> 
 <?php echo $session->commonFooterJS();?>
<?php
if(isset($_GET['loginForm'])){

?>
<!-- Color picker Start -->

  <div class="color_picker_area">
    <div class="color_picker_switcher">
      <i class="fa fa-tint"></i>
    </div>
    <form>
      <h4>Theme colors</h4>
      <input class="select_theme" type="radio" name="cor" id="cor1" value="orange">
      <label for="cor1" class="cor1" title="orange"></label>

      <input class="select_theme" type="radio" name="cor" id="cor2" value="blue">
      <label for="cor2" class="cor2" title="blue"></label>

      <input class="select_theme" type="radio" name="cor" id="cor3" value="brown">
      <label for="cor3" class="cor3" title="brown"></label>

      <input class="select_theme" type="radio" name="cor" id="cor4" value="green">
      <label for="cor4" class="cor4" title="green"></label>

      <input class="select_theme" type="radio" name="cor" id="cor5" value="d-pink">
      <label for="cor5" class="cor5" title="d-pink"></label>

      <input class="select_theme" type="radio" name="cor" id="cor6" value="purple">
      <label for="cor6" class="cor6" title="purple"></label>

      <input class="select_theme" type="radio" name="cor" id="cor7" value="sea">
      <label for="cor7" class="cor7" title="sea"></label>

      <input class="select_theme" type="radio" name="cor" id="cor8" value="black">
      <label for="cor8" class="cor8" title="black"></label>
    </form>
  </div>
  <!--color picker End-->
<div class="login_page" id="login_page">
      <div class="top-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-7 text-center">
            <div class="left-content text-left">
              <a href="#">
                <i class="fa fa-share"></i>
                <span>Skip Main Content</span>
              </a>
              <a href="#">
                <i class="fa fa-universal-access"></i>
                <span>Screen Reader Access</span>
              </a>
            </div>
          </div>
          <div class="col-lg-6 col-md-5 text-center">
            <ul class="header-widget text-right">
              <li>
                Font-size:
              </li>
              <li>
                <a class="btn btn-xs theme-bg btn-rounded" href="#" title="Decrease fontsize" id="btn-decrease">A-</a>
              </li>
              <li>
                <a class="btn btn-xs theme-bg btn-rounded" href="#" title="Normal fontsize" id="btn-orig">A</a>
              </li>
              <li>
                <a class="btn btn-xs theme-bg btn-rounded" href="#" title="Increase fontsize" id="btn-increase">A+</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="middle-header">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-lg-4 col-md-12 text-center hidden-md hidden-sm hidden-xs">
                <a href="#">
                  <img class="ts-logo img-responsive" src="<?php echo SECURE_PATH; ?>images/ada-300x300.png" width="250" alt="logo">
                </a>
              </div>
              <div class="col-lg-2 col-md-2 text-center" style="display:none;">
                <a href="#">
                  <img class="wdsc-logo" src="<?php echo SECURE_PATH; ?>images/logo.png" width="80" alt="logo">
                </a>
              </div>
              <div class="col-lg-6 col-md-10">
                <div class="navbar-brand-text text-xl-center">
                  <a href="#">Office of the State Commissioner For Persons with Disabilities 
                    <br>
                    <small>Government of Telangana</small>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!--<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 hidden-sm hidden-xs">
            <ul class="ts-vips list-inline">
              <li>
                <a href="#">
                  <div class="vip-details">
                    <div class="vip-img">
                      <img src="<?php echo SECURE_PATH; ?>images/kcr.jpg" alt="testimonial-author">
                    </div>
                    <div class="vip-name">
                      <h4>Sri. K. Chandrashekar Rao</h4>
                      <h6>Hon'ble Chief Minister</h6>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="vip-details">
                    <div class="vip-img">
                      <img src="<?php echo SECURE_PATH; ?>images/tnr.jpg" alt="testimonial-author">
                    </div>
                    <div class="vip-name">
                      <h4>Sri. Tummala Nageswara Rao</h4>
                      <h6>Hon'ble Minister for R&B, WDSC</h6>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>-->
        </div>
      </div>
    </div>
  <div class="main_section" id="applicant_section">
    <div class="row">
      <div class="col-md-12">
        <h2 class="heading text-center" style="color:#000;">Welcome to Office of the State Commissioner For Persons with Disabilities </h2>
      </div>
      <form class="form-inline" style="display:none;" >
        <div class="input-group input_pad"> <a  class="btn btn-lg btn-login btn_custom" onClick="setState('login_page','<?php echo SECURE_PATH;?>login_applicant.php','login=1')"><i class="fa fa-signin"></i> Applicant</a> </div>
        <div class="input-group input_pad"> <a class="btn btn-lg btn-login btn_custom btn_custom1" onClick="setState('login_page','<?php echo SECURE_PATH;?>login_process.php','loginForm=1')"><i class="fa fa-signin"></i> Employee</a> </div>
      </form>
      <br>
      <div class="col-md-6 col-sm-12">
        <form class="form-inline" id="enter_form" onSubmit="return false;">
          <div class="input-group input_pad col-sm-10 search_block1 col-sm-offset-2">
            <input type="text" placeholder="Know Your Application Status Box" id="search" class="search_input">
            <a class="icon_search" onclick="setStateGet('applicant_section','<?php echo SECURE_PATH;?>ajax.php','search_application=true&search='+$('#search').val());"><i class="fa fa-search" aria-hidden="true"></i></a> </div>
        </form>
      </div>
      <div class="col-md-6 col-sm-12">
        <form class="form-inline" id="enter_form1" onSubmit="return false;" >
          <div class="input-group input_pad col-sm-10 search_block1" style="float:left">
            <input type="text" placeholder="Print Your Application" id="search_p" class="search_input">
            <a class="icon_search" onclick="setStateGet('applicant_section','<?php echo SECURE_PATH;?>ajax.php','print_application=true&search='+$('#search_p').val());"><i class="fa fa-search" aria-hidden="true"></i></a> </div>
        </form>
      </div>
      <script type="text/javascript">
$('#enter_form1').keyup(function(e) {

   if ( e.which == 13) {
      //stuff


setStateGet('applicant_section','<?php echo SECURE_PATH;?>ajax.php','print_application=true&search='+$('#search_p').val());
}

});

</script> 
    </div>
    <div class="col-md-12 text-center">
    	<a class="btn btn-lg btn_custom_back" href="http://scpwd.telangana.gov.in" ><b>Back To Home</b></a>
    </div>
    
  </div>
  <div class="second_block">
    <div class="row" style="margin-left:0;margin-right:0;">
      <center>
        <h3 class="colored_text">How It Works</h3>
      </center>
      <div class="col-md-3 col-sm-3 col-xs-12">
        <center>
          <img class="img_icon" src="<?php echo SECURE_PATH; ?>assets/images/login_images/Icon1.png">
          <h4 class="colored_text">Enrollment</h4>
          <p>Eligible Candidate need to submit the Application online</p>
        </center>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12">
        <center>
          <img class="img_icon" src="<?php echo SECURE_PATH; ?>assets/images/login_images/Icon2.png">
          <h4 class="colored_text">Approval / Generate Proceedings</h4>
          <p> The Applications will be verified by District Welfare Officer & Proceedings will be generated</p>
        </center>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12">
        <center>
          <img class="img_icon" src="<?php echo SECURE_PATH; ?>assets/images/login_images/Icon3.png">
          <h4 class="colored_text">Revenue</h4>
          <p>The selection and sanction of the applicant will be finalised by the District Screening Committee</p>
        </center>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12">
        <center>
          <img class="img_icon" src="<?php echo SECURE_PATH; ?>assets/images/login_images/Icon4.png">
          <h4 class="colored_text">Status</h4>
          <p>Applicant can search status of his application by entering Acknowledgement number in know your Application status box</p>
        </center>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
//$('#user').focus();
</script>
<?php
}

if(isset($_POST['login'])){

      $_POST = $session->cleanInput($_POST);


$subuser = $_POST['user'];
$subpass = $_POST['pass'];

$usererror = '';
$passerror = '';

      /* Username error checking */
      $field = "user";  //Use field name for username
      // echo "SELECT valid FROM ".TBL_USERS." WHERE username='$subuser'";
	  $q = "SELECT valid FROM ".TBL_USERS." WHERE username='$subuser'";
	  $valid = $database->query($q);
	  $valid = mysqli_fetch_array($valid);

      if(!$subuser || strlen($subuser = trim($subuser)) == 0){

         $usererror =  "* Username not entered";
      }


      /* Password error checking */
      $field = "pass";  //Use field name for password
      if(!$subpass){
         $passerror =   "* Password not entered";
      }

      /* Return if form errors exist */
      if(strlen($usererror) == 0 && strlen($passerror) == 0){



      /* Checks that username is in database and password is correct */
      $subuser = stripslashes($subuser);
      $result = $database->confirmUserPass($subuser, $subpass);

      /* Check error codes */
      if($result == 1){
         $field = "user";
         $usererror =   "* Username not found";
      }
      else if($result == 2){
         $field = "pass";
        $passerror =   "* Invalid password";
      }

	  }

      /* Login successful */
      if(strlen($usererror) == 0 && strlen($passerror) == 0){
  /* Username and password correct, register session variables */
      $session->userinfo  = $database->getUserInfo($subuser);
      $session->username  = $_SESSION['username'] = $session->userinfo['username'];
      $session->userid    = $_SESSION['userid']   = $session->generateRandID();
      $session->userlevel = $session->userinfo['userlevel'];

      /* Insert userid into database and update active users table */
      $database->updateUserField($session->username, "userid", $session->userid);
      $database->addActiveUser($session->username, $session->time);
      $database->removeActiveGuest($_SERVER['REMOTE_ADDR']);

      /**
       * This is the cool part: the user has requested that we remember that
       * he's logged in, so we set two cookies. One to hold his username,
       * and one to hold his random value userid. It expires by the time
       * specified in constants.php. Now, next time he comes to our site, we will
       * log him in automatically, but only if he didn't log out before he left.
       */
//      if($subremember){
         setcookie("cookname", $session->username, time()+COOKIE_EXPIRE, COOKIE_PATH);
         setcookie("cookid",   $session->userid,   time()+COOKIE_EXPIRE, COOKIE_PATH);
 //     }
$database->query("INSERT INTO  password_log VALUES (NULL,'".$_SESSION['username']."','".$_SERVER['REMOTE_ADDR']."','".time()."','login')");

?>
<script type="text/javascript">

window.location = '<?php echo SECURE_PATH;?>home/';

</script>
<?php
      }
      /* Login failed */
      else{


?>
<div class="login_page">
  <div class="header_block">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 col-md-offset-0 col-sm-6 col-xs-6 col-xs-offset-3">
          <div class="logo_block"> <img src="<?php echo SECURE_PATH; ?>assets/images/login_images/ED_logo.png" alt="logo-png" class="ts_logo"> </div>
        </div>
        <div class="col-md-2 col-md-offset-1 col-sm-6 col-xs-12">
          <div class="search_block"> <a href="#"><img src="<?php echo SECURE_PATH; ?>assets/images/login_images/Temple.png" width="120" height="100" alt="logo-png"></a> </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="profile_block">
            <ul class="profile_block_menus">
              <li> <a href="#"><img src="<?php echo SECURE_PATH; ?>assets/images/login_images/CM.png" style="margin: 0 auto;" width="75" height="75" alt="logo-png"> <span class="sub_head"> K. CHANDRASHEKAR RAO </span> <span class="main_head" style="margin-left: 7px;">HON'BLE CHIEF MINISTER</span> </a></li>
              <li> <a href="#"><img src="<?php echo SECURE_PATH; ?>assets/images/login_images/BD_minister.png" style="margin: 0 auto;" width="75" height="75" alt="logo-png"> <span class="sub_head" style="margin-left:15px"> A. INDRA KIRAN REDDY </span> <span class="main_head">HON'BLE ENDOWMENTS MINISTER</span> </a></li>
              <li style="display:none;"> <a href="#"><img src="<?php echo SECURE_PATH; ?>assets/images/login_images/cmsnr.png" style="margin: 0 auto;" width="75" height="75" alt="logo-png"> <span class="sub_head" style="margin-left:15px"> N. SIVA SHANKAR .I.A.S </span> <span class="main_head"> COMMISSIONER ENDOWMENTS DEPARTMENT</span> </a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main_section">
    <center>
      <h2 class="heading">Welcome to Endowments Land Management System</h2>
      <p>ENDOW LMS An Goverment of Telangana Initiative to expand the e-Governance <br>
        to digitalize, control and monitor revenue from leased lands.</p>
    </center>
    <center>
      <form class="form-inline">
        <div class="input-group input_pad"> <span style="border:none" class="input-group-addon"><img class="input_images" src="<?php echo SECURE_PATH; ?>assets/images/login_images/user_name.png"></i></span>
          <input id="user" type="text" class="form-control form_pad" name="email" placeholder="Username" autofocus value="<?php echo $_POST['user'];?>">
        </div>
        <div class="form-group has-error">
          <p class="help-block"><?php echo $usererror;?></p>
        </div>
        <div class="input-group input_pad"> <span style="border:none" class="input-group-addon"><img class="input_images" src="<?php echo SECURE_PATH; ?>assets/images/login_images/Key.png"></i></span>
          <input type="password" class="form-control form_pad" id="pass" placeholder="Password" value="<?php echo $_POST['pass'];?>">
        </div>
        <div class="form-group has-error">
          <p class="help-block"><?php echo $passerror ;?></p>
        </div>
        <br>
        <a class="btn btn-lg btn-login btn_custom" onClick="setState('loginForm','<?php echo SECURE_PATH;?>login_process.php','login=1&user='+$('#user').val()+'&pass='+$('#pass').val())"><i class="fa fa-signin"></i> LogIn</a>
      </form>
    </center>
  </div>
  <div class="second_block">
    <div class="row" style="margin-left:0;margin-right:0;">
      <center>
        <h3 class="colored_text">How It Works</h3>
      </center>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <center>
          <img class="img_icon" src="<?php echo SECURE_PATH; ?>assets/images/login_images/Icon1.png">
          <h4 class="colored_text">Enrollment</h4>
          <p>Eligible Candidate need to Submit the Application Online</p>
        </center>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <center>
          <img class="img_icon" src="<?php echo SECURE_PATH; ?>assets/images/login_images/Icon2.png">
          <h4 class="colored_text">Approval / Generate Proceedings</h4>
          <p> The Applications will be verified by District Welfare Officer & Proceedings will be Generated</p>
        </center>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <center>
          <img class="img_icon" src="<?php echo SECURE_PATH; ?>assets/images/login_images/Icon3.png">
          <h4 class="colored_text">Revenue</h4>
          <p>The Selection and Sanction of the Applicant will be finalised by the District Screening Committee</p>
        </center>
      </div>
    </div>
  </div>
</div>

<!--
<form class="form-signin" >
        <h2 class="form-signin-heading">Sign in to Endowments</h2>
        <div class="login-wrap">
<input type="text" class="form-control" id="user" placeholder="Username" autofocus value="<?php echo $_POST['user'];?>">
                                  <div class="form-group has-error">
                                          <p class="help-block"><?php echo $usererror;?></p>
                                  </div>

            <input type="password" class="form-control" id="pass" placeholder="Password" value="<?php echo $_POST['pass'];?>">
                             <div class="form-group has-error">
                                          <p class="help-block"><?php echo $passerror ;?></p>
                                  </div>

     <label class="checkbox">
                <span class="pull-right">

                </span>
            </label>


     <a class="btn btn-lg btn-login btn-block" onClick="setState('loginForm','<?php echo SECURE_PATH;?>login_process.php','login=1&user='+$('#user').val()+'&pass='+$('#pass').val())"><i class="fa fa-signin"></i> Sign In</a>


        </div>

          <!-- Modal --> 
<!-- <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Enter your e-mail address below to reset your password.</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                          <button class="btn btn-success" type="button">Submit</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal --> 

<!-- </form> -->

<?php
      }

}


if(isset($_REQUEST['userLogout'])){
	$database->query("INSERT INTO  password_log VALUES (NULL,'".$_SESSION['username']."','".$_SERVER['REMOTE_ADDR']."','".time()."','logout')");

	  $session->logout();
?>
<script type="text/javascript">

window.location = '<?php echo SECURE_PATH;?>';
</script>
<?php
}
?>
<script type="text/javascript">
$('#loginForm').keyup(function(e) {

   if ( e.which == 13) {
      //stuff
//setState('loginForm','<?php echo SECURE_PATH;?>login_process.php','login=1&user='+$('#user').val()+'&pass='+$('#pass').val());
}

});


</script> 
<script>
    $(document).ready(function () {
      // Color Picker js
      $(".select_theme").on('click', function () {
        var getId = $(this).attr('value');
        $('body').removeClass('orange blue brown green d-pink purple sea black')
          .addClass(getId);
      });
      $(".color_picker_switcher").on('click', function () {
        $(".color_picker_area").toggleClass('on');
      })
    });
	 // preloader js 
	  //$(window).load(function () {
		  // $('#preloader').fadeOut(2000);
		    //$('body').delay(150).css({ 'overflow': 'visible' });
			 //});
  </script>
