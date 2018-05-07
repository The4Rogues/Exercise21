
<?php
require_once("backend/loan.php")

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>
        <section class="w3-container">
        <div class="form-wrapper">
        <form action="checkOut.php" method="POST">
        <fieldset class ="the_fieldset">
        <legend class="the_legend">Check Out Book</legend>
        <form action="" method="POST">
             
        <div class="form-group col-xs-12 col-md-6">
            <label for="author_search" >Title:</label>
            <input type="text" name="bookid" class="form-control">
        </div>

        <div class="form-group col-xs-12 col-md-6">
            <label for="publisher_search" >Borrower:</label>
            <input type="text" name="borrowerid" class="form-control">
        </div>
            
            <div class="form-group">
                        <button type="submit" class="btn btn-primary">

          
        
                      
              <?php
                if (!empty($_POST)) {
            echo "<h3>Welcome $_POST[username]</h3>"; 
            echo "<h3>Your email is $_POST[email]</h3>";
            echo "<h3>Your Date of Birth is $_POST[birthdate]</h3>";
            echo "<h3>You live in $_POST[country]</h3>";
            
        }
        else{
        echo "<h4>You have not submitted any data to the server</h4>";
        }
                ?>
            </body>
        
   
</html>
