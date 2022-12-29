<?php
	session_start();
 
	require_once 'connection.php';
 
	if(ISSET($_POST['submit'])){
		$username=$_POST['sid']; // username sent from form 
		$password=$_POST['pword'];
		// To protect MySQL injection 
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysqli_real_escape_string($conn, $username);
		$password = mysqli_real_escape_string($conn, $password);

		//Query
		$sql="SELECT * FROM mentee WHERE `sid` = '$username' and `password`='$password'";
		$result=mysqli_query($conn, $sql);
		// Mysql_num_row is counting table row
		$rows = mysqli_fetch_assoc($result);

		if($rows > 0) {
			$_SESSION['sid'] = $fetch['sid'];
			$_SESSION['fname'] = $_POST['Fname'];
			header("location: home.php");
		} else{
			echo "
			<script>alert('Invalid username or password')</script>
			<script>window.location = 'login.php'</script>
			";
		}
		/*
		if($_POST['sid'] != "" || $_POST['password'] != ""){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sql = "SELECT * FROM `member` WHERE `username`=? AND `password`=? ";
			$query = $conn->prepare($sql);
			$query->execute(array($username,$password));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			
			
			
			if($row > 0) {
				$_SESSION['user'] = $fetch['mem_id'];
				header("location: home.php");
			} else{
				echo "
				<script>alert('Invalid username or password')</script>
				<script>window.location = 'index.php'</script>
				";
			}
		}else{
			echo "
				<script>alert('Please complete the required field!')</script>
				<script>window.location = 'index.php'</script>
			";
		}*/
	}
?>