<?php
session_start();
?>
<html>
    <head>
         <title>loginpagina</title>
        <link rel='stylesheet' href='../stylesheets/bootstrap.css'>
        <link rel='stylesheet' href='../stylesheets/inloggen.css'>
        
        <!--link van de body fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com"> 
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,500&display=swap" rel="stylesheet"> 
        <!--eind link -->
        <!--link title--> 
        <link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,500&family=Rokkitt:wght@700&display=swap" rel="stylesheet"> 
<!--eind link-->
    </head>
    
    <body>
        
        <header class='header'>
            <a href='#' class='logo'>L3 </a>
            <input class="menu-btn" type='checkbox' id='menu-btn'/>
            <label class='menu-icon' for='menu-btn'><span class='nav-icon'></span></label>


            <ul class='menu'>
                  <li><a href="../index.php">Home</a></li>
                  <li><a href="mboHBOBoek.php">MBO Boeken</a></li>
                   <li><a href="mboHBOBoek.php">HBO boeken</a></li>
                   <li><a href="aboutUs.php">About us</a></li>
                   <li><a href="contact us.php">Contact us</a></li>
                   <li class="log-in"><a href="inlogAndSignup.php">Log in</a></li>
                   <li class="sing-up"><a href="inlogAndSignup.php">Sing up</a></li>
             </ul>
       </header>
        <form action="./php/loginPhp.php" method="post"> <!--class="text_white container_about"-->
            <br/>
            <br/>
            <br/>
            
          
            
            <div class='logingevgevens'>
                <h2>Login</h2><br/>
            <label > Gebruikers naam </label><br/>
            <input class='username'type="text" name="user" placeholder='Uw naam'> <br/>
            
            <label> wachtwoord </label><br/>
            <input class='passwoord' type="password" name="wachtwoord" placeholder='UW Password'> <br/>
             
            
            <input class='submit' type="submit" name="submit" value="submit">
            </div>
        
            
        </form>
    <form action="./php/aanmelden.php" method="post" ><!--class="text_white container_about"-->
        <div class='logingevgevens'>
            <h2 class='signup'>Signup</h2><br/>
            
            <label> Gebruikers naam </label><br/>
            <input class='username' type="text" name="useraanmelde" placeholder='Uw naam'> <br/>
            
            <label> wachtwoord </label><br/>
            <input class='passwoord' type="password" name="wachtwoordaanmelde"  placeholder='UW Password'> <br/>
            
            <label> wachtwoordconfirm </label><br/>
            <input class='passwoord' type="password" name="wachtwoordconfirm"  placeholder='UW Password'> <br/>
            
            <input class='submit' type="submit" name="submitreg" value="submit" >
            </div>
    
        </form>
    </body>
</html>