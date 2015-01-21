<?php
require_once("conn.php");
$login=$_POST['username'];
$pass=$_POST['userpass'];
$sql="select login,pass from users where login=:login and pass=:pass";
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt=$conn->prepare($sql);
$stmt->bindParam(':login',$login,PDO::PARAM_STR);
$stmt->bindParam(':pass',$pass,PDO::PARAM_STR);
$stmt->execute();
$count=$stmt->rowCount();
if($count==0){
echo("Your username or password is not correct ");
echo('<a href="index.php">Go back</a>');

}
else{
  session_start();
  $_SESSION['login']=$login;
  header("location:dashbord.php");
}



?>
