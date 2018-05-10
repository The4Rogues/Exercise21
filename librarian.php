<!DOCTYPE html>
<!--
RUN THIS PAGE FIRST
-->

<?php

session_start();
        
 ?>

<html>
    <head>
        <title>Login and Library Home Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    </head>
    
    <body>
        
 <!-- Go to Search Catalogue Page
 -->
        <button type="button" onclick=" ">
            <a href='BookSearchForm.php' >Search catalogue</a>
        </button>
 
<!--  User logs on -->


        
        <h1>Log into library account</h1>

        <form action="librarianLoginAction.php"  
              method="post" >
     

              <p>Username: <input type="text" name="username" required autofocus/>  
               Password: <input type="password" name="password" required /></p>

                <input type="submit" value="Login" />
        </form>
        
        

       
    </body>

</html>
