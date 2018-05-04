<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
        session_start();
        
         $_SESSION = [];
        session_destroy();
        
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
            
            //SOME CODE here to update record onto borrower_table on database
               
           
        }
        
        // if the $_SESSION superglobal contains values:
        //
        
        if (!empty($_SESSION)){   
            
            
            echo "Account updated for ". $_SESSION["username"] . '<br>';
               
            echo "<a href='LibraryHomePage.html'>Logout</a><br>"; 
            echo "<a href='BooksOnLoan.Page.html'>Books on loan and outstanding fines</a><br>"; 
            
        }