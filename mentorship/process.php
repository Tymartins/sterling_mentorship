<?php
//Database Configuration File
include('connection.php');
error_reporting(0);
if(isset($_POST['submitbtn'])){
//Getting Post Values

$sid=$_POST['sid'];
$fname=$_POST['fname'];
$gender=$_POST['gender'];
$role=$_POST['role'];
$motivation=$_POST['motivation'];
$self=$_POST['self'];
$reasons=$_POST['reasons'];
$focus=$_POST['focus'];
$hobby=$_POST['hobby'];
$moreInformation=$_POST['moreInformation'];
$password=$_POST['password'];

//checking if staff id exist 
$ret="SELECT * FROM mentee where (sid=:sid)";
        $queryt = $dbh -> prepare($ret);
        $queryt->bindParam(':sid',$sid,PDO::PARAM_STR);
        $queryt -> execute();
        $results = $queryt -> fetchAll(PDO::FETCH_OBJ);

        if($queryt -> rowCount() == 0){
            // Query for Insertion
            $query = $dbh->prepare($sql);
                    $sql="INSERT INTO mentee(SID,FName,Gender,Role,Motivation,Self,Reasons,Focus,Hobby, MoreInformation,Password) VALUES(:sid,:fname,:gender,:role,:motivation,:self,:reasons,:focus,:hobby,:moreInformation,:password)";
                    $query = $dbh->prepare($sql);
                    // Binding Post Values
                    $query->bindParam(':sid',$sid,PDO::PARAM_STR);
                    $query->bindParam(':fname',$fname,PDO::PARAM_STR);
                    $query->bindParam(':gender',$gender,PDO::PARAM_STR);
                    $query->bindParam(':role',$role,PDO::PARAM_INT);
                    $query->bindParam(':motivation',$motivation,PDO::PARAM_INT);
                    $query->bindParam(':self',$self,PDO::PARAM_INT);
                    $query->bindParam(':reasons',$reasons,PDO::PARAM_INT);
                    $query->bindParam(':focus',$focus,PDO::PARAM_INT);
                    $query->bindParam(':hobby',$hobby,PDO::PARAM_INT);
                    $query->bindParam(':moreInformation',$moreInformation,PDO::PARAM_INT);
                    $query->bindParam(':password',$password,PDO::PARAM_STR);
                    $query->execute();
                    $lastInsertId = $dbh->lastInsertId();
                          if($lastInsertId){
                          $msg="You have signup  Scuccessfully";
                           header('location: login.php'); //mentee
                          }
                          else {
                            $error="Something went wrong.Please try again";
                            }
                          }
                          else{
                          $error="Staff Id already exist. Please try again";
                          }
  }

?>






 


       



