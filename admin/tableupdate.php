<?php
include("dbconnect.php");
if(isset($_POST["update"]))
{ 

 // $id = $_POST['id'];
 // echo $id;
  $sl = $_POST['id'];
$disability = $_POST['dis'];
$men = $_POST['mid'];
$women = $_POST['wid'];
$total = $_POST['tot'];

// echo '<script>alert("'.$sl.'");</script>'

 echo $sl;
  echo $disability;
   echo $men;
    echo $women;
     echo $total;
  $up = mysqli_query($con,"update resources_data set Disability='$disability',Men=$men,Women=$women,Total=$total where sid=$sl");

 if(mysqli_affected_rows($con) > 0)
{
    echo '<script>window.location.href="adminresources1.php";</script>';
  $msg = "successfully Updated";

}
else
{
  $msgerr = "please update and click button otherwise don't click";
  echo '<script>window.location.href="adminresources.php";</script>';
}


}


?>