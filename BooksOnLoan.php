<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
  session_start();

        
        // if the $_SESSION superglobal contains values:
        //This is just to tryout layout, data would be got from database

$_SESSION["isbn"] = '12345';
$_SESSION["title"] = 'Planet Mars' ;
$_SESSION["author"]= 'P.Smith' ;
$_SESSION["date_out"] = "04/12/17";
$_SESSION["date_due"]= "10/12/17";
$_SESSION["date_returned"] = "13/12/17";
$_SESSION["overdue_fine"] = "£0.60" ;
?>

<html>
    <head>
        <title>Books on loan</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Books on Loan and Outstanding Fines</h1>
        
  </body>
  </html>     
  
  <?php 
  
  // needs to loop and this should have headers 
  // and be a table?
  
  if (!empty($_SESSION)){            
  
            echo $_SESSION["isbn"].' '. $_SESSION["title"] .' '. $_SESSION["author"].' '. $_SESSION["date_out"] . ' '.
            $_SESSION["date_due"] .' '. $_SESSION["date_returned"] . ' '.$_SESSION["overdue_fine"]. PHP_EOL;
  }
echo PHP_EOL;
  echo "<a href='LibraryHomePage.html'>Logout</a><br>"; 