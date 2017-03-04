<!DOCTYPE html>
<html >
   <head>
      <meta charset="UTF-8">
      <title>Home</title>
      <link href="<?php echo assets_url();?>css/style.css?t=3" rel="stylesheet" />
      <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="<?php echo assets_url();?>login/css/reset.css"> <!-- CSS reset -->
   <link rel="stylesheet" href="<?php echo assets_url();?>/login/css/style.css"> <!-- Gem style -->
   <script src="<?php echo assets_url();?>login/js/modernizr.js"></script> <!-- Modernizr -->
      <script>
         var rootfolder = "<?php echo base_folder();?>";
         <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 'true'){?>
         var loggedIn   = "true";
         <?php }else{?>
         var loggedIn   = "false";
         <?php } ?>
         var mainNav = '';
      </script>
   </head>
   <body>
   
        
      <div id="header">
         <div class="section">
            <div class="logo-zone">
               <strong class="logo"><a href="/"></a></strong>
               <strong>THE ACT OF MASTURBATING WHILE CHATTING ONLINE</strong>
            </div>
<?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 'true'){?>
<div align="right">
<div id="user_information">
<div class="top" align="left">
<img src="https://ssl-ccstatic.highwebmedia.com/images/ico-male-blue.gif" width="14" height="15" alt="Male Icon">
<a href="/p/nithinnpk/" class="username">nithinnpk</a>
<div class="links">
<a href="/p/nithinnpk/?tab=bio" class="white">MY PROFILE</a> |
<a href="<?php echo base_folder();?>welcome/logout/" class="white">LOG OUT</a>
</div>
</div>
<div class="bottom">
<table>
<tbody><tr>
<th>Status:</th>
<td>Basic Member</td>
<td><a href="/supporter/upgrade/" class="upgrade">(Upgrade)</a></td>
</tr>
<tr>
<th>You have:</th>
<td><div class="overflow"><strong><a href="/p/nithinnpk/?tab=tokens" class="tokencountlink"><span class="tokencount">0</span> Tokens</a></strong></div></td>
<td><a href="#" class="purchase_tokens">(Get More)</a></td>
</tr>
</tbody></table>
</div>
</div>
</div>
<?php } ?>
         </div>
         <div class="nav-bar">
            <ul id="nav">
               <li><a href="<?php echo base_folder();?>">CHAT ROOMS</a></li>
               <li id="broadcast-button"><nav class="main-nav"><a class="cd-signin">BROADCAST YOURSELF</a></nav></li>
               <?php if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != 'true'){?>
               <li id="login-button"><nav class="main-nav"><a class="login-link cd-signin" href="#0">LOGIN</a></nav></li>
               <?php } ?>
            </ul>
            <?php if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != 'true'){?>
            <nav class="main-nav"><a class="creat nooverlay cd-signup" href="#0">SIGN UP</a></nav>
            <?php } ?>
         </div>
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
         <ul class="cd-switcher" style="padding:0px;">
            <li><a href="#0">Sign in</a></li>
            <li><a href="#0">New account</a></li>
         </ul>

         <div id="cd-login"> <!-- log in form -->
            <form class="cd-form" action="<?php echo base_folder();?>welcome/login" method="POST">
               <p class="fieldset">
                  <label  class="image-replace cd-email" for="signin-email">E-mail</label>
                  <input name="user_id" class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
                  <span class="cd-error-message">Error message here!</span>
               </p>

               <p class="fieldset">
                  <label class="image-replace cd-password" for="signin-password">Password</label>
                  <input name="password" class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">
                  <a href="#0" class="hide-password">Hide</a>
                  <span class="cd-error-message">Error message here!</span>
               </p>

               <p class="fieldset">
                  <input type="checkbox" id="remember-me" checked>
                  <label for="remember-me">Remember me</label>
               </p>

               <p class="fieldset">
                  <input id="login" class="full-width" type="submit" value="Login">
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
<script type="text/javascript" src="<?php echo assets_url();?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo assets_url();?>js/script_home.js"></script>
<script src="<?php echo assets_url();?>login/js/main.js"></script> <!-- Gem jQuery -->