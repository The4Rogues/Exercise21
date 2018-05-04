
<?php
        session_start();
        
                        //set the session variables if the $_POST superglobal is not empty:
                                      
        if (!empty($_POST)){
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
            
            //some code here to check password entered against password on database??
               
           
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
  
