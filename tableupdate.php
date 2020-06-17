<?php

if(isset($_POST["Update"]))
{ 

 // $id = $_POST['id'];
 // echo $id;
  $sl = $_POST['id'];
$disability = $_POST['dis'];
$men = $_POST['mid'];
$women = $_POST['wid'];
$total = $_POST['tot'];

// echo '<script>alert("'.$sl.'");</script>'
  $up = mysqli_query($conn,"update resources_data set Disability='$disability',Men='$men',Women='$women',Total='$total' where Sl.No='$sl'");

 if(mysqli_affected_rows($conn) > 0)
{
    echo '<script>window.location.href="adminresources.php";</script>';
  $msg = "successfully Updated";

}
else
{
  $msgerr = "please update and click button otherwise don't click";
  echo '<script>window.location.href="adminresources.php";</script>';
}


}


?>