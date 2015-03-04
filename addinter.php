<html>
<head>
  <title>EDIT EMPLOYEE</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css"/>
  <link rel="stylesheet" type="text/css" href="css/custom.css"/>
  <style type="text/css">

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
      <form class="form-horizontal" id="addemp-login" action="saddinter.php" method="post">
        <fieldset>

          <!-- Form Name -->
          <legend>ADD AN INTERN</legend>

          <!-- Text input-->
          <div class="control-group">
            <label class="control-label" for="fname">INTER NAME</label>
            <div class="controls">
              <input id="fname" name="intername"  class="input-xlarge" type="text">

            </div>
          </div>

          <!-- Text input-->
          <div class="control-group">
            <label class="control-label" for="job">COLLEGE</label>
            <div class="controls">
              <input id="job" name="college"  class="input-xlarge" type="text">

            </div>
          </div>

          <!-- Text input-->
          <div class="control-group">
            <label class="control-label" for="hiredate">FROM DATE</label>
            <div class="controls">
              <input id="datefrom" name="datefrom"  class="input-xlarge" type="text">

            </div>
          </div>

          <!-- Text input-->
          <div class="control-group">
            <label class="control-label" for="comm">TO DATE</label>
            <div class="controls">
              <input id="dateto" name="dateto"  class="input-xlarge" type="text">

            </div>
          </div>

          <!-- Text input-->
          <div class="control-group">
            <label class="control-label" for="sal">JOB</label>
            <div class="controls">
              <input id="sal" name="job" class="input-xlarge" type="text">

            </div>
          </div>

          <!-- Select Basic -->
          <div class="control-group">
            <label class="control-label" for="deptno">DEPARTMENT NAME</label>
            <div class="controls">
              <select id="deptno" name="deptno" class="input-xlarge">

                <option value="1">INFORMATION TECHNOLOGY</option>
                <option value="2">SALES</option>
                <option value="4">FINANCIAL</option>
                <option value="5">ADMINISTRATION</option>
                <option value="7">COMMUNICATION</option>
              </select>
            </div>
          </div>

          <!-- Button (Double) -->
          <div class="control-group">
            <label class="control-label" for="button1id"></label>
            <div class="controls">
              <button type="submit" id="button1id" name="button1id" class="btn btn-success">ADD</button>
              <button type="reset" id="button2id" name="button2id" class="btn btn-danger">RESET</button>
            </div>
          </div>

        </fieldset>
      </form>


    </div>
  </div>
  <div id="footer">
    <div class="wrapper">

    </div>
  </div>

  <script language="javascript" src="js/jquery.js"></script>
  <script language="javascript" src="js/bootstrap.min.js"></script>
  <script language="javascript" src="js/jquery-ui.js"></script>
  <script language="javascript" src="js/custom.js"></script>

</body>
</html>
