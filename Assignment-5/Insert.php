<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname ="assgn";
$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
if($conn)
{
if(isset($_POST["btn"]))
{
$fulnme=$_POST['fname'];
$ml=$_POST['mail'];
$org=$_POST['org'];
$cnt=$_POST['cntry'];
$cntct=$_POST['num'];
$prof=$_POST['prof'];
$ps=$_POST['pass'];
$in="insert into reg values('$fulnme','$ml','$org','$cnt','$cntct','$prof','$ps') ";
if(mysqli_query($conn,$in))
{
echo"<br><script>alert('entries are registered');</script><br>";
}
else
{
echo"Cant Register";
}
}
else
{
  echo mysqli_error($conn);
}
}
mysqli_close($conn);
?>
