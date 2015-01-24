<?php
require_once("conn.php");
  session_start();
  if(!isset($_SESSION['login'])){
    header("location:index.php");
  }

$sql="update emp set ename='".$_POST['fname']."',job='".$_POST['job']."',hiredate='".$_POST['hiredate']."',sal='".$_POST['sal']."',comm='".$_POST['comm']."',deptno='".$_POST['deptno']."' where empno='".$_POST['empno']."'";
$stmt->$conn->prepare($sql);
$stmt->execute();
header("location:employees.php");
?>
