<?php

/* 

 */


        session_start();
         $_SESSION = [];
       // session_destroy();
        
                        //set the session variables if the $_POST superglobal is not empty:
                                      
        if (!empty($_POST)){
            $_SESSION["firstname"] = $_POST["firstname"];
            $_SESSION["lastname"] = $_POST["lastname"];
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
            $_SESSION["address"] = $_POST["address"];
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["phone"] = $_POST["phone"];
            $_SESSION["dob"] = $_POST["dob"];
            
            //SOME CODE here to insert record onto borrower_table on database
            //Check username not already in use
               
           
        }
        
        // if the $_SESSION superglobal contains values:
        //
        
        if (!empty($_SESSION)){   
            
            
            echo "Account created for ". $_SESSION["username"] . '<br>';
               
            echo "<a href='LibraryHomePage.html'>Login</a><br>"; 
            
                  
        }
        
        ?>