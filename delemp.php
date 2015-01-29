<?php
require_once("conn.php");
$id=$_GET["id"];
$sql="delete from emp where empno='".$id."'";
$stmt=$conn->prepare($sql);
$stmt->execute();
header("location:employee.php");


?>
