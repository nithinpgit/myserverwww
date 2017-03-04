<!DOCTYPE html>
<html >
   <head>
      <meta charset="UTF-8">
      <title>Home</title>
      <link href="<?php echo assets_url();?>css/style.css" rel="stylesheet" />
      <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

   <link rel="stylesheet" href="<?php echo assets_url();?>login/css/reset.css"> <!-- CSS reset -->
   <link rel="stylesheet" href="<?php echo assets_url();?>/login/css/style.css"> <!-- Gem style -->
   <script src="<?php echo assets_url();?>login/js/modernizr.js"></script> <!-- Modernizr -->
      <script>
         var rootfolder = "<?php echo base_folder();?>";
      </script>
   </head>
   <body>
      <div id="header">
         <div class="section">
            <div class="logo-zone">
               <strong class="logo"><a href="/"></a></strong>
               <strong>THE ACT OF MASTURBATING WHILE CHATTING ONLINE</strong>
            </div>
         </div>
         <div class="nav-bar">
            <ul id="nav">
               <li><a href="<?php echo base_folder();?>">CHAT ROOMS</a></li>
               <li><a href="<?php echo base_folder();?>broadcast/">BROADCAST YOURSELF</a></li>
               <li><a>EARN FREE TOKENS</a></li>
               <li><a class="login-link cd-signin" href="#0">LOGIN</a></li>
            </ul>
            <a class="creat nooverlay cd-signup" href="#0">SIGN UP</a>
         </div>
         <ul>
            <!-- inser more links here -->
            <li><a class="cd-signin" href="#0">Sign in</a></li>
            <li><a class="cd-signup" href="#0">Sign up</a></li>
         </ul>
      </div>
      <!-- filter menus -->
      <div class="top-section">
         <div class="advanced_search_button_shell"></div>
         <ul class="sub-nav">
            <li id="featured" class="active" onClick="filterRooms('featured')"><a href="#">FEATURED</a></li>
            <li id="female"><a onClick="filterRooms('female')">FEMALE</a></li>
            <li id="male"><a onClick="filterRooms('male')">MALE</a></li>
            <li id="couple"><a  onClick="filterRooms('couple')">COUPLE</a></li>
            <li id="trans"><a  onClick="filterRooms('trans')">TRANS</a></li>
         </ul>
      </div>

<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
      <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
         <ul class="cd-switcher">
            <li><a href="#0">Sign in</a></li>
            <li><a href="#0">New account</a></li>
         </ul>

         <div id="cd-login"> <!-- log in form -->
            <form class="cd-form">
               <p class="fieldset">
                  <label class="image-replace cd-email" for="signin-email">E-mail</label>
                  <input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
                  <span class="cd-error-message">Error message here!</span>
               </p>

               <p class="fieldset">
                  <label class="image-replace cd-password" for="signin-password">Password</label>
                  <input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">
                  <a href="#0" class="hide-password">Hide</a>
                  <span class="cd-error-message">Error message here!</span>
               </p>

               <p class="fieldset">
                  <input type="checkbox" id="remember-me" checked>
                  <label for="remember-me">Remember me</label>
               </p>

               <p class="fieldset">
                  <input class="full-width" type="submit" value="Login">
               </p>
            </form>
            
            <p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
            <!-- <a href="#0" class="cd-close-form">Close</a> -->
         </div> <!-- cd-login -->

         <div id="cd-signup"> <!-- sign up form -->
            <form class="cd-form">
               <p class="fieldset">
                  <label class="image-replace cd-username" for="signup-username">Username</label>
                  <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
                  <span class="cd-error-message">Error message here!</span>
               </p>

               <p class="fieldset">
                  <label class="image-replace cd-email" for="signup-email">E-mail</label>
                  <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
                  <span class="cd-error-message">Error message here!</span>
               </p>

               <p class="fieldset">
                  <label class="image-replace cd-password" for="signup-password">Password</label>
                  <input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password">
                  <a href="#0" class="hide-password">Hide</a>
                  <span class="cd-error-message">Error message here!</span>
               </p>

               <p class="fieldset">
                  <input type="checkbox" id="accept-terms">
                  <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
               </p>

               <p class="fieldset">
                  <input class="full-width has-padding" type="submit" value="Create account">
               </p>
            </form>

            <!-- <a href="#0" class="cd-close-form">Close</a> -->
         </div> <!-- cd-signup -->

         <div id="cd-reset-password"> <!-- reset password form -->
            <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

            <form class="cd-form">
               <p class="fieldset">
                  <label class="image-replace cd-email" for="reset-email">E-mail</label>
                  <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                  <span class="cd-error-message">Error message here!</span>
               </p>

               <p class="fieldset">
                  <input class="full-width has-padding" type="submit" value="Reset password">
               </p>
            </form>

            <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
         </div> <!-- cd-reset-password -->
         <a href="#0" class="cd-close-form">Close</a>
      </div> <!-- cd-user-modal-container -->
   </div> <!-- cd-user-modal -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php echo assets_url();?>login/js/main.js"></script> <!-- Gem jQuery -->