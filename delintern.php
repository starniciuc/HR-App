<?php
require_once("conn.php");
$id=$_GET['id'];
$sql="DELETE FROM interns WHERE internid=:internid";
$stmt=$conn->prepare($sql);
$stmt->bindParam(':internid',$id,PDO::PARAM_INT);
$stmt->execute();
header("location:interns.php");
?>
