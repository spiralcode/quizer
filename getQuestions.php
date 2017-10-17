<?php
include 'connect.php';
class itemd
{
    var $ques;
    var $ans;
    var $dated;
    var $id;
}
$recDate = $_GET['date'];
$datePart = explode("/",$recDate);
$day = $datePart[1];
$month = $datePart[0];
$year = $datePart[2];
$sql = "select * from questions where day(time) = $day and month(time) = $month and year(time) = $year";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "[";
    while($row = $result->fetch_assoc()) {

        $ques = $row["question"];
        $sol = $row["solution"];
        $dated = $row["time"];
        $id = $row["id"];
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

        $newItem = new itemd();
        $newItem->ques=$ques;
        $newItem->ans=$sol;
        $newItem->dated=$dated;
        $newItem->id=$id;
        
        echo json_encode($newItem);
        
    }
    echo "]";
} else {
    echo "0 results";
}
$conn->close();
?>