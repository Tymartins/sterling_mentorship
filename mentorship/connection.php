
<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbname = "mentorship";
$dbpass = '';


$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 if($conn -> connect_errno){
    echo "Failed to connect to DB:". $conn -> connect_error;
    exit();
 }
// DB credentials.


?>
