<?php
$delete=$_REQUEST['deleteid'];
// echo"$delete";
// exit;

//database connection
$servername="localhost";
$username="root";
$password="";
$dbname="leora_cosmetics";
$conn=mysqli_connect($servername,$username,$password,$dbname);

//check connection
if($conn===false)
{
    die("error,could'nt connect".$conn->connect_error());
}
// else{
//     echo"connection successfull";
// }
// exit;
$sql = "DELETE FROM `order_form` WHERE 'id'='$delete'"; 
// echo $sql;
// exit;
$res=mysqli_query($conn,$sql);
if($res==1)
{
    echo "deleted successfully";
}
else{
    echo "error:";
}
?>