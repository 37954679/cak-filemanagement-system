<?php
include "conn.php";
$id=$_POST['file_id'];
$sql="delete from logs where file_id='$id'";
$query=mysqli_query($conn,$sql);
if($query)
{
    echo "Successful";
}
else
{
    echo "Error";
}
?>