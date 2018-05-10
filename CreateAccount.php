<?php
include ('classes/borrower.php');
include ('backend/db.php');

//$db = new DB;

session_start();
 $_SESSION = [];

if (!empty($_POST)){

    //construct class
    $borrower = new borrower($_POST["username"],$_POST["password"], $_POST["firstname"],
            $_POST["lastname"], $_POST["dob"], $_POST["address"], $_POST["phone"], '20180504', $_POST["email"]);

    //prep for sql
   
    $username = $borrower->get_username();
    $password= $borrower->get_password();
    $first_name= $borrower->get_first_name();
    $last_name= $borrower->get_last_name();
    $dob= $borrower->get_dob();
    $address= $borrower->get_address();
    $tel= $borrower->get_tel();
    $acc_last_active= $borrower->get_acc_last_active();
    $email= $borrower->get_email();  
    
    //print_r($borrower);
    
          
    $sql = "INSERT INTO borrowers(username, password, first_name, last_name, email, address, tel, 
        acc_last_active, is_active, date_of_birth) 
        VALUES ('$username', '$password', '$first_name', '$last_name', '$email','$address', '$tel', '$acc_last_active',1,'$dob')";
          
            
    }
    // connect sql
   $dsn= 'mysql:host=localhost;dbname=library';
     
   $pdo = new PDO($dsn, 'root','');

    // Adding borrower
   $add_borrower = $pdo->prepare($sql);
   $add_borrower->execute();
     

        
        // if the $_SESSION superglobal contains values:

        
        if (!empty($_SESSION)){   
            
            
            echo "Account created for ". $_SESSION["username"] . '<br>';
               
            echo "<a href='LibraryHomePage.html'>Login</a><br>"; 
            
                  
}