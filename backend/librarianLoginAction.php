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

        <form action="Login.php"  
              method="post" >
     

              <p>Username: <input type="text" name="username" required autofocus/>  
               Password: <input type="password" name="password" required /></p>

                <input type="submit" value="Login" />
        </form>
        
        
        
        <?php
        
                        //set the session variables if the $_POST superglobal is not empty:
                                      
        if (!empty($_POST)){
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
            
            //some code here to check password entered against password on database??
        if (empty($post)){
            $_SESSION[""];
        }     
           
        }
        
        // if the $_SESSION superglobal contains values:
        // welcome the user and give them the option of viewing their books etc or updating their detsils
        //
        
        if (!empty($_SESSION)){   
            
            echo "Welcome ". $_SESSION["username"] . '<br>';
               
            echo "<a href='BooksOnLoan.php'>View books on loan and fines</a><br>"; 
            echo "<a href='UpdatePersonal.html'>Update personal details</a><br>";
                  
        }
        
        ?>
  
 
 <!--  Create new user account ie join library
 -->       
        <h1>Not a library member?</h1>
        <a href ='CreateAccount.html'>Create account</a>
       
    </body>

</html>