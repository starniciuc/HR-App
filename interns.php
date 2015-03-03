<?php
require_once("conn.php");
session_start();
if(!isset($_SESSION['login'])){
  header("location:index.php");
}
$sql="select i.internid,i.intername,i.college,i.datefrom,i.dateto,i.job,d.deptname from interns as i ,dept as d where i.deptno=d.deptno";
$stmt=$conn->prepare($sql);
$stmt->execute();


?>
<html>
<head>
  <title>Interns and intership</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/custom.css"/>
  <style type="text/css">
  ul li{
    top:14px;
    border-bottom:1px solid gray;
  }
  th{
    background-color:#B74934;
    color:white;
  }
  div#pano{
    margin-top:20px;
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
        <li role="presentation" class="active"><a href="interns.php"><span class="glyphicon glyphicon-user"></span> Interns</a></li>
        <li role="presentation"><a href="dept.php"><span class="glyphicon glyphicon-stats"></span> Departement</a></li>
        <a href="dcon.php"><button type="button" class="btn btn-danger" id="decon"><span class="glyphicon glyphicon-log-out"></span> Log out</button></a>
      </ul>
      <div id="pano" class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading"><h3 align="center">INTERNS</h3></div>
      <table class="table">
        <tr>
          <th>ID</th><th>FULL NAME</th> <th>COLLEGE</th> <th> FROM DATE</th>
          <th>TO DATE</th><th>JOB</th><th>DEPARTMENT NAME</th>
          <td colspan="2"><a href="addinter.php"><button type="button" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span>New intern</button></a></td>
          <td></td>
        </tr>
        <?php
        while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
          ?>
          <tr>
            <td><?php echo($result['internid'])?></td>
            <td><?php echo($result['intername'])?></td>
            <td><?php echo($result['college'])?></td>
            <td><?php echo($result['datefrom'])?></td>
            <td><?php echo($result['dateto'])?></td>
            <td><?php echo($result['job'])?></td>
            <td><?php echo($result['deptname'])?></td>
            <td><a href="edintern.php?id=<?php echo($result['internid'])?>"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span> Edit</button></a></td>
            <td><a href="delintern.php?id=<?php echo($result['internid'])?>"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</button></a></td>
          </tr>
          <?php
        }
        $conn=null;

        ?>
      </table>
    </div>
    </div>

  </div>
  <div id="footer">
    <div class="wrapper">

    </div>
  </div>

  <script language="javascript" src="js/jquery.js"></script>

  <script language="javascript" src="js/bootstrap.min.js"></script>

</body>
</html>
