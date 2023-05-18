<?php
include("../connnection.php");



$deletequery = "delete from usertbl where id='".$_GET["id"]."'";
$deletequeryconnect = mysqli_query($con,$deletequery);
if($deletequeryconnect)
{
header("Location:index.php");    
}
?>

