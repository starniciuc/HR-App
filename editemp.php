<?php
session_start();
if(!isset($_SESSION['login'])){
  header("location:index.php");
}
require_once("conn.php");
$sql="SELECT e.ename, e.job, e.hiredate, e.comm, e.sal,d.deptno,d.deptname FROM emp AS e, dept AS d WHERE e.deptno = d.deptno and empno='".$_GET['id']."'";
$stmt=$conn->prepare($sql);
$stmt->execute();
$rs=$stmt->fetch(PDO::FETCH_ASSOC);
$ido=$_GET["id"];
?>

<html>
<head>
  <title>EDIT EMPLOYEE</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/custom.css"/>
  <style type="text/css">
  figure{
    float:right;
    margin-right:50px;
    margin-top:20px;
    /*figure of page*/
  }
  img{
    border-radius:50%;

  }
  form{
    float:left;
    margin-left:70px;
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
      <form class="form-horizontal" id="editemp-login" action="seditemp.php" method="post">
        <fieldset>

          <!-- Form Name -->
          <legend>EDIT EMPLOYEE</legend>
          <label for="cd">IDENTIFICATION NUMBER</label><br>
          <input type="text" id="cd" readonly="readonly" name="empno" value="<?php echo($ido) ?>"/>

          <!-- Text input-->
          <div class="control-group">
            <label class="control-label" for="fname">FULL NAME</label>
            <div class="controls">
              <input id="fname" name="fname" value="<?php echo($rs['ename'])?>" class="input-xlarge" type="text">

            </div>
          </div>

          <!-- Text input-->
          <div class="control-group">
            <label class="control-label" for="job">JOB</label>
            <div class="controls">
              <input id="job" name="job" value="<?php echo($rs['job'])?>" class="input-xlarge" type="text">

            </div>
          </div>

          <!-- Text input-->
          <div class="control-group">
            <label class="control-label" for="hiredate">HIRE DATE</label>
            <div class="controls">
              <input id="hiredate" name="hiredate" value="<?php echo($rs['hiredate'])?>" class="input-xlarge" type="text">

            </div>
          </div>

          <!-- Text input-->
          <div class="control-group">
            <label class="control-label" for="comm">COMMISSION</label>
            <div class="controls">
              <input id="comm" name="comm" value="<?php echo($rs['comm'])?>" class="input-xlarge" type="text">

            </div>
          </div>

          <!-- Text input-->
          <div class="control-group">
            <label class="control-label" for="sal">SALARY</label>
            <div class="controls">
              <input id="sal" name="sal" value="<?php echo($rs['sal'])?>" class="input-xlarge" type="text">

            </div>
          </div>

          <!-- Select Basic -->
          <div class="control-group">
            <label class="control-label" for="deptno">DEPARTMENT NAME</label>
            <div class="controls">
              <select id="deptno" name="deptno" class="input-xlarge">
                <option value="<?php echo($rs['deptno'])?>"><?php echo($rs['deptname'])?></option>
                <option value="1">INFORMATION TECHNOLOGY</option>
                <option value="2">SALES</option>
                <option value="4">FINANCIAL</option>
                <option value="5">ADMINISTRATION</option>
                <option value="7">COMMUNICATION</option>
              </select>
            </div>
          </div>
          <?php $conn=null ?>
          <!-- Button (Double) -->
          <div class="control-group">
            <label class="control-label" for="button1id"></label>
            <div class="controls">
              <button type="submit" id="button1id" name="button1id" class="btn btn-success">EDIT</button>
              <button type="reset" id="button2id" name="button2id" class="btn btn-danger">RESET</button>
            </div>
          </div>

        </fieldset>
      </form>
      <figure>
        <img src="hr3.jpg" alt="Add employee" />
      </figure>

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
