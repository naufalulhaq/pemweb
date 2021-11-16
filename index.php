<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login Page</title>
  </head>

    <body>
        <div class="section"></div>
        <main>
          <center>
            
            <div class="section"></div>
      
            <div class="container">
              <div class="login-box" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
                
                <img class="responsive-img" style="width: 250px;" src="images/itslogo.png" />

                <form action="validation.php" class="col s12" method="post">
                  <div class='row'>
                    <div class='col s12'>
                    </div>
                  </div>
      
                  <div class='row'>
                    <div class="input-field col s12">
                        <input id="username" type="text" class="validate" name="user">
                        <label for="username">Username</label>
                    </div>
                  </div>
 
                  <div class='row'>
                    <div class='input-field col s12'>
                      <input class='validate' type='password' name='password' id='password' />
                      <label for='password'>Enter your password</label>
                    </div>
                  </div>
      
                  <br />
                  <center>
                    <div class='row'>
                      <button type='submit' name='btn_login' class='col s4 offset-s4 btn btn-small waves-effect black'>Login</button>
                    </div>
                  </center>
                </form>

                <div class="row"><a href="regis.php">Don't have an account?</a></div>
              </div>
            </div>
          </center>
      
          <div class="section"></div>
          <div class="section"></div>
        </main>
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    </body>
</html>