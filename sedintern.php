<?php
require_once("conn.php");
$id=$_POST['internid'];
$intername=$_POST["intername"];
$college=$_POST["college"];
$from=$_POST["datefrom"];
$to=$_POST["dateto"];
$job=$_POST["job"];
$deptno=$_POST["deptno"];
$sql="UPDATE interns
SET intername=:intername,college=:college,datefrom=:datefrom,dateto=:dateto,job=:job,deptno=:deptno WHERE internid=:internid";
$stmt=$conn->prepare($sql);
$stmt->bindParam(":intername",$intername);
$stmt->bindParam(":college",$college);
$stmt->bindParam(":datefrom",$from);
$stmt->bindParam(":dateto",$to);
$stmt->bindParam(":job",$job);
$stmt->bindParam(":deptno",$deptno);
$stmt->bindParam(":internid",$id);
$stmt->execute();
header("location:interns.php");

?>
