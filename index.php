
<html>
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    <style type="text/css">
      form#login-form{
        float:left;

      }
      figure{
        float:right;
        margin-left:50px;
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
        <form class="form-horizontal" method="post" id="login-form" action="login.php">
          <fieldset>

            <!-- Form Name -->
            <legend>Log In</legend>

            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="textinput">User Name :</label>
              <div class="controls">
                <input id="textinput" name="username" placeholder="username" class="input-xlarge" type="text">
                <p class="help-block">Please enter your username</p>
              </div>
            </div>

            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="passwordinput">Password :</label>
              <div class="controls">
                <input id="passwordinput" name="userpass" placeholder="password" class="input-xlarge" type="password">
                <p class="help-block">Please enter your password</p>
              </div>
            </div>

            <!-- Button (Double) -->
            <div class="control-group">
              <label class="control-label" for="button1id"></label>
              <div class="controls">
                <button id="button1id" name="button1id" class="btn btn-success" type="submit">Log In</button>
                <button id="button2id" name="button2id" class="btn btn-danger" type="reset">Reset</button>
              </div>
            </div>

          </fieldset>
        </form>
        <figure>
        <img src="hr1.jpg" alt="HR" />
         </figure>

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
