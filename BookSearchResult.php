<?php

require_once("backend/books.php");
require_once("backend/loan.php");
session_start();

?>
<!DOCTYPE html>
<!--
Library Project
Book Search result page
Created by Ichi 06/05/2018
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Book Search Result Page</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <section class="book_search">
    
            <h2>Search Results:</h2></br>
            <div class ="result_wrapper">
            <?php

            $results = searchBooks();
            if(empty($results)){
                echo "<h4> No result </h4>";
            }
            
            ?>
            <?php foreach ($results as $row){ ?>
                <h3 class="col-xs-12" id="title"><?= $row['title']; ?></h3>

                <p class="col-xs-12" id ="author"><?= $row['author']; ?></p>
                <p class="col-xs-6 col-md-4">ISBN: <?= $row['isbn']; ?></p>
                <p class="col-xs-6 col-md-4">Edition: <?= $row['edition']; ?></p>
                <p class="col-xs-6 col-md-4">Year: <?= $row['year']; ?></p>
                <p class="col-xs-12">Publisher: <?= $row['publisher']; ?></p>
                
                <p class="col-xs-12">Accessibility Options: <?= $row['accessibility']; ?></p>
                <p class="col-xs-6 col-md-4">Genre: <?= $row['genre']; ?></p>
                <p class="col-xs-6 col-md-4">Readers Level: <?= $row['reader_level']; ?></p>
                <p class="col-xs-6 col-md-4">Age Restriction: <?= $row['age_restriction']? 'None':'Yes'; ?></p>
                <p class="col-xs-6 col-md-4">Reference Only: <?= $row['is_reference']? 'No':'Yes'; ?></p>
                
                <?php
                if (isBookAvail($row['id'])) {
                    ?>
                    <p class="col-xs-6 col-md-4">Loan Status: Available</p>
                    <p class="col-xs-6 col-md-4"><button onclick="location.href='CheckOut.php?bookid=<?= $row['id']?>';">Issue Book</button></p>
                <?php
                } else {
                    echo '<p class="col-xs-6 col-md-4">Loan Status: Not Available</p>';
                } ?>
                
                <p></p>
            <?php } ?>
            
           
            </div>
       </section>
    </body>
</html>

