<?php
$host="localhost";
$db="hr";
$user="root";
$pass="passw0rd";

try{
  $conn=new PDO("mysql:host=$host;dbname=$db",$user,$pass);
}
catch(PDOException $e){
  echo "Not connected :".$e->getMessage();

}
?>
