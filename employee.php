<?php
session_start();
if(!isset($_SESSION['login'])){
  header("location:index.php");
}
require_once("conn.php");
$sql="SELECT e.empno, e.ename, e.job, e.hiredate, e.comm, e.sal, d.deptname FROM emp AS e, dept AS d WHERE e.deptno = d.deptno";
$stmt=$conn->prepare($sql);
$stmt->execute();



?>
<html>
<head>
  <title>Employees</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/custom.css"/>
  <style type="text/css">
  ul li{
    top:14px;
    border-bottom:1px solid gray;
  }
  div.panel{
    margin-top:20px;
  }
  th{
    color:white;
    background-color:orange;
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
      <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading"><h3 align="center">Employees</h3></div>

        <!-- Table -->
        <table class="table">
        <tr>
          <th>ID</th><th>FULL NAME</th> <th>JOB</th> <th>HIRE DATE</th>
          <th>COMM</th><th>SALARY</th><th>DEPARTMENT</th>
          <td colspan="2"><a href="addemp.php"><button type="button" class="btn btn-success btn-lg">ADD AN EMPLOYEE</button></a></td>
          <td></td>
        </tr>
        <?php
        while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
       ?>
       <tr>
         <td><?php echo($result['empno'])?></td>
         <td><?php echo($result['ename'])?></td>
         <td><?php echo($result['job'])?></td>
         <td><?php echo($result['hiredate'])?></td>
         <td><?php echo($result['comm'])?></td>
         <td><?php echo($result['sal'])?></td>
         <td><?php echo($result['deptname'])?></td>
         <td><a href="editemp.php?id=<?php echo($result['empno'])?>"><button type="button" class="btn btn-info">EDIT</button></a></td>
         <td><a href="delemp.php?id=<?php echo($result['empno'])?>"><button type="button" class="btn btn-danger">DELETE</button></a></td>
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


  <script language="javascript" src="js/bootstrap.min.js"></script>
  <script language="javascript" src="js/jquery.js"></script>

</body>
</html>
