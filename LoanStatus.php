
<?php
try {
    require_once 'backend/loan.php';
    
//    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //after writing select statement store result in result query
//    $result = $db->query($sql);
    //PDO row count method returns the number of results in a result set.
    //report the number of rows in result set, if query produces any results 
    //else error no results found.
    //for the method you create a (1)variable (2) use the result object (3)call row count method
   //sqlite does not report number of results.
   //inorder to make it portable i.e. work of sqlite you need to write another
    //select query to find the number of results. $count = db->query (SELECT COUNT(*) FROM...);
    //store it in a variable then 
    //$numrows = $count->fetchColumn(); this method works on different database 
    //management sytems. create if statement to ensure you only use one method. 
    //need to write if statement in body too.
//    $numrows = $result->rowCount();
} catch (Exception $e) {
    $error= $e->getMessage(); 
    die();
}

?>

<!DOCTYPE html>

<html>
    <head>
    <meta charset="UTF-8">
        <title>Book Search</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <section class="w3-container">
      <div class="form-wrapper">
        <h2>&nbsp;&nbsp;&nbsp;&nbsp;Loan Status</h2>
        <p>

          <div class="row">
            <div class="w3-green col-xs-4">Title</div>
            <div class="w3-green col-xs-4">Date Due</div> 
            <div class="w3-green col-xs-4">Name</div>
          </div>
          <br>

          <?php 
          $loans = getLoans();
          foreach($loans as $loan) { ?>

          <div class="row">
            <div class="col-xs-4">
              <?=$loan['title'];?>
            </div>
            <div class="col-xs-4">
              <?=$loan['date_due'];?>
            </div>
            <div class="col-xs-4">
              <?=$loan['borrower_full_name'];?>
            </div>
          </div>
            <br>   
          <?php } ?>
        </section>
        
    </body>
</html>