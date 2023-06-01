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
$target_dir = "";
$target_file = $target_dir.$_FILES["file"]["name"];
echo $target_file;
  if (move_uploaded_file($_FILES["file"]["tmp_name"],$target_file)) {
   $sql="insert into logs(date,Forwarded_to,subject,action_taken_by,dispatched_to,received_from,file_path)
   values('$date_received','$forwarded_to','$subject','$action_taken_by','$dispatched_to','$office_received_from','$target_file')";
   $query=mysqli_query($conn,$sql);
   if($query){
      header("location:logs.php");
   }
  } else {
    echo "Sorry, there was an error uploading your file.".$_FILES['file']['error'];
  }
}
?>