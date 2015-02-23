
<?php
session_start();
if(!isset($_SESSION['login'])){
  header("location:index.php");
}


?>
<html>
<head>
  <title>Dashbord HR</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/custom.css"/>
  <style type="text/css">
  ul li{
    top:14px;
    border-bottom:1px solid gray;
  }
  p{
    margin-top:40px;
    margin-left:300px;
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
        <li role="presentation" class="active"><a href="dashbord.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li role="presentation"><a href="employee.php"><span class="glyphicon glyphicon-user"></span> Employees</a></li>
        <li role="presentation"><a href="interns.php"><span class="glyphicon glyphicon-user"></span> Interns</a></li>
        <li role="presentation"><a href="dept.php"><span class="glyphicon glyphicon-stats"></span> Departement</a></li>
        <a href="dcon.php"><button type="button" class="btn btn-danger" id="decon"><span class="glyphicon glyphicon-log-out"></span> Log out</button></a>
      </ul>
      <p>
        <img src="hr.jpeg" alt="HR Departement"/>
      </p>

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
