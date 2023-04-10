<?php include '../database.php'?>
<?php
$result=$conn->query("select * from courses");
$course=$result->num_rows;

$result=$conn->query("select * from ccategory");
$category=$result->num_rows;

$result=$conn->query("select * from ctype");
$type=$result->num_rows;

?>