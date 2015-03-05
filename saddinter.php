<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css"/>
</head>
<body>
<?php
  require_once("conn.php");
  $intername=$_POST["intername"];
  $college=$_POST["college"];
  $datefrom=$_POST["datefrom"];
  $dateto=$_POST["dateto"];
  $job=$_POST["job"];
  $deptno=$_POST["deptno"];
  if(!empty($datefrom) and !empty($dateto)){
    $start = new DateTime($datefrom); // DD-MM-YYYY
    $end = new DateTime($dateto);
if ($start > $end) {
  echo('<div class="alert alert-danger" role="alert">
  <strong>Incorrect order, end date is before the starting date<a href="addinter.php"> Go back</a><strong>
</div>');
  //echo "Incorrect order, end date is before the starting date";
}

else{
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
}
    }


?>
<script language="javascript" src="js/jquery.js"></script>
<script language="javascript" src="js/bootstrap.min.js"></script>
<script language="javascript" src="js/jquery-ui.js"></script>
</body>
<html>
