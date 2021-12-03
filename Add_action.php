<?php
$name=$_REQUEST['name'];
$date=$_REQUEST['date'];
$image=$_REQUEST['fileToUpload'];
//database connection
$servername="localhost";
$username="root";
$password="";
$dbname="photo_gallery";
$conn=mysqli_connect($servername,$username,$password,$dbname);

//cinnectiviti checking
if($conn===false)
{
    die("error,couldn't connect".mysqli_connect_error());
}
$sql = "INSERT INTO `images`(`image_name`, `created date`, `image`) VALUES ('$name','$date','$image')"; 
// echo $sql;
// exit;
$result=mysqli_query($conn,$sql);
if($result==1)
{
    header("location:view_image.php");
}
else{
    echo"error";
}
?>