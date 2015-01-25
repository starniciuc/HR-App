<?php
$con=mysql_connect("localhost","root","passw0rd") or die("ERROR ".mysql_error());
mysql_select_db("hr",$con);
$fname=$_POST['fname'];
$job=$_POST['job'];
$hiredate=$_POST['hiredate'];
$sal=$_POST['sal'];
$comm=$_POST['comm'];
$deptno=$_POST['deptno'];
$empno=$_POST['empno'];
$sql="UPDATE emp SET ename='".$fname."', job='".$job."',hiredate='".$hiredate."', sal='".$sal."', comm='".$comm."', deptno='".$deptno."'  WHERE empno='".$empno."'";
mysql_query($sql) or die(mysql_error());
echo("FULL NAME :".$fname."\n");
echo("JOB: ".$job."\n");
echo("HIREDATE :".$hiredate."\n");
echo("SALARY :".$sal."\n");
echo("COMMISSION :".$comm."\n");
echo("DEPTNO :".$deptno."\n");
echo("ID EMP :".$empno."\n");
mysql_close($con);
header("location:employee.php");
?>
