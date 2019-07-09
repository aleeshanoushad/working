<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assests/images/icons/favicon.ico"/> -->
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assests/vendor/bootstrap/css/bootstrap.min.css"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assests/fonts/font-awesome-4.7.0/css/font-awesome.min.css"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assests/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assests/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="assests/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assests/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assests/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="assests/vendor/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="assests/css/main.css">

<div class="form" style="">
      
      <div class="tab-group tab">
        <button class="tab tablinks" style="float:left;" onclick="openTab('signup');">Sign Up</button>
        <button class="tab tablinks" style="float:right;" onclick="openTab('login');">Log In</button>
      </div>
      
      <div >
        <div id="signup" class="tab-content" >   
          <h1>Sign Up </h1>
          
             <div>
              <?php echo show_messages(); ?>
             </div>
          

          
          <form action="Login/signupfunction" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="frstname" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name="lastname"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="passwrd" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
        <div id="login" class="tab-content" style="display: none;">   
          <h1>Welcome Back!</h1>
          
          <form action="Login/loginned" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="email" />
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="password" />
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<script>
function openTab(cityName) {
// alert('ok');
  
  if(cityName == 'login'){
    document.getElementById('login').style.display = "block";
    document.getElementById('signup').style.display = "none";


  }else if(cityName == 'signup'){
    document.getElementById('login').style.display = "none";
    document.getElementById('signup').style.display = "block";


  }
  

}  
</script>
<script src="assests/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="assests/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="assests/vendor/bootstrap/js/popper.js"></script>
  <script src="assests/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="assests/vendor/select2/select2.min.js"></script>
  
<!--===============================================================================================-->
  <script src="assests/vendor/daterangepicker/moment.min.js"></script>
  <script src="assests/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="assests/vendor/countdowntime/countdowntime.js"></script>
  <script src="assests/js/main.js"></script>
<!--===============================================================================================-->
 

</body>

</html>