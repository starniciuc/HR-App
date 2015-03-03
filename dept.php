<?php
session_start();
if(!isset($_SESSION['login'])){
  header("location:index.php");
}


?>
<html>
<head>
  <title>Department information</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/custom.css"/>
  <style type="text/css">
  ul li{
    top:14px;
    border-bottom:1px solid gray;
  }
  .panel{
    margin-top:20px;
  }
  .panel-heading{
    text-align:center;
    background-color:;


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
        <li role="presentation"><a href="dashbord.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li role="presentation"><a href="employee.php"><span class="glyphicon glyphicon-user"></span> Employees</a></li>
        <li role="presentation"><a href="interns.php"><span class="glyphicon glyphicon-user"></span> Interns</a></li>
        <li role="presentation" class="active"><a href="dept.php"><span class="glyphicon glyphicon-stats"></span> Departement</a></li>
        <a href="dcon.php"><button type="button" class="btn btn-danger" id="decon"><span class="glyphicon glyphicon-log-out"></span> Log out</button></a>
      </ul>

    </div>
  </div>

    <div class="wrapper">
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">

          <span class="glyphicon glyphicon-search"></span>
          <input type="text" id="search" class="form-control" placeholder="Search by name">
          <p>
            <input class="cat" type="radio" name="cat" value="1" checked>Employee
            <input class="cat" type="radio" name="cat" value="2">Interns
          </p>


        </div><br>

  </form>

      <div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading"><h3 style="color:black;">INFORMATIONS</h3></div>
          <div class="panel-body">
            <table class="table">

            </table>
          </div>

        </div>

    </div>
    <script language="javascript" src="js/jquery.js"></script>
    <script language="javascript" src="js/bootstrap.min.js"></script>
    <script language="javascript" src="js/custom.js"></script>



</body>
</html>
