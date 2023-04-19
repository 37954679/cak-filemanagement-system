<?php
if(isset($_POST['add']))
{
$office_received_from=$_POST['received_from'];
$date_received=$_POST['date'];
$forwarded_to=$_POST['forwarded_to'];
$dipatched_to=$_POST['dispatched_to'];
$action_taken_by=$_POST['action_taken_by'];
$subject=$_POST['subject'];
echo $office_received_from;
}
?>