<?php
include 'connect.php';
$qs = $_POST['qs'];
$so = $_POST['so'];


$old_date = date('l, F d y h:i:s');              // returns Saturday, January 30 10 02:06:34
$old_date_timestamp = strtotime($old_date);
$new_date = date('Y-m-d H:i:s', $old_date_timestamp);   

$query = "insert into questions values ('$qs','$so','$new_date',0)";
if($conn->query($query) === TRUE)
{
echo "1";
}
else
{
    echo 0;
    echo $conn->error;
}
$conn->close();
?>