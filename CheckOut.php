
<?php
require_once "backend/loan.php";

if (isset($_POST['borrower_id'])) {
    bookOut($_POST['bookid'], $_POST['borrower_id']);
    header('Location: librarianhomepage.php');
}

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
        <form action="CheckOut.php" method="POST">
        <fieldset class ="the_fieldset">
        <legend class="the_legend">Check Out Book</legend>
        <form action="" method="POST">
        <div>
            <label for="borrower_id" >Borrower ID:</label>
            <input type="text" name="borrower_id" class="form-control" value="" />
            <input type="hidden" name="bookid" class="form-control" value="<?=$_GET['bookid'] ?>"/>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </body>
</html>
