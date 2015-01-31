<?php
  require_once("conn.php");
  $intername=$_POST["intername"];
  $college=$_POST["college"];
  $datefrom=$_POST["datefrom"];
  $dateto=$_POST["dateto"];
  $job=$_POST["job"];
  $deptno=$_POST["deptno"];
  $sql="INSERT INTO interns (intername,college,datefrom,dateto,job,deptno) VALUES(:intername,:college,:datefrom,:dateto,:job,:deptno)";
  $stmt=$conn->prepare($sql);
  $stmt->bindParam(":intername",$intername);
  $stmt->bindParam(":college",$college);
  $stmt->bindParam(":datefrom",$datefrom);
  $stmt->bindParam(":dateto",$dateto);
  $stmt->bindParam(":job",$job);
  $stmt->bindParam(":deptno",$deptno);
  $stmt->execute();
  header("location:interns.php");


?>
