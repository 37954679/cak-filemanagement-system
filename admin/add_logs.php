<?php
include_once "conn.php";
if(isset($_POST['add']))
{
$office_received_from=$_POST['received_from'];
$date_received=$_POST['date'];
$forwarded_to=$_POST['forwarded_to'];
$dispatched_to=$_POST['dispatched_to'];
$action_taken_by=$_POST['action_taken_by'];
$subject=$_POST['subject'];
$sql="insert into logs(date,Forwarded_to,subject,action_taken_by,dispatched_to,received_from)
 values('$date_received','$forwarded_to','$subject','$action_taken_by','$dispatched_to','$office_received_from')";
 $query=mysqli_query($conn,$sql);
 if($query){
    header("location:logs.php");
 }
}
?>