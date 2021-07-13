<?php
$conn = mysqli_connect("localhost","root","","ajax_serialize") or die("Connection Failed!!!");
$sql = "SELECT * FROM test";
$result = mysqli_query($conn,$sql) or die("Query Failed!!!");
$output = mysqli_fetch_all($result,MYSQLI_ASSOC);

echo json_encode($output);

?>