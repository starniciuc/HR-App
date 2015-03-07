<?php
require_once("conn.php");
$fname=$_POST["fname"];
$job=$_POST["job"];
$hiredate=$_POST["hiredate"];
$comm=$_POST["comm"];
$sal=$_POST["sal"];
$deptno=$_POST["deptno"];
if(isset($fname) && isset($job) && isset($hiredate) && isset ($deptno) && isset($fname)){
if (!empty($fname) && !empty($hiredate)){
$query="INSERT INTO emp (ename,job,hiredate,comm,sal,deptno) VALUES(:ename,:job,:hdate,:comm,:sal,:deptno)";

$stmt=$conn->prepare($query);
$stmt->bindParam(':ename',$fname);
$stmt->bindParam(':job',$job);
$stmt->bindParam(':hdate',$hiredate);
$stmt->bindParam(':comm',$comm);
$stmt->bindParam(':sal',$sal);
$stmt->bindParam(':deptno',$deptno);
$stmt->execute();

  header("location:employee.php");
  }
  else{
    header("location:employee.php");
    
  }
}
?>
