<html>
<body>
<?php

 $servername="localhost";
 $username="root";
 $password="";
 $dbname="lodb";
 $conn=new mysqli($servername,$username,$password,$dbname);
 if(!$conn)
 {
	die("connection failed:".mysqli_connection_error());
 }
 
?>
</body>
</html>