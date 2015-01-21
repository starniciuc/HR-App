<?php
session_start();
if(!isset($_SESSION['login'])){
  header("location:index.php");
}


?>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/custom.css"/>
  <style type="text/css">
  ul li{
    top:14px;
    border-bottom:1px solid gray;
  }

  </style>

</head>
<body>
  <div id="header">
    <div class="wrapper">
      <h1>HR-Application</h1>
    </div>
  </div>
  <div id="content">
    <div class="wrapper">
      <ul class="nav nav-pills">
        <li role="presentation"><a href="dashbord.php">Home</a></li>
        <li role="presentation" class="active"><a href="employee.php">Employees</a></li>
        <li role="presentation"><a href="interns.php">Interns</a></li>
        <li role="presentation"><a href="dept.php">Departement</a></li>
        <a href="dcon.php"><button type="button" class="btn btn-danger" id="decon">Log out</button></a>
      </ul>

    </div>
  </div>
  <div id="footer">
    <div class="wrapper">

    </div>
  </div>


  <script language="javascript" src="js/bootstrap.min.js"></script>
  <script language="javascript" src="js/jquery.js"></script>

</body>
</html>
