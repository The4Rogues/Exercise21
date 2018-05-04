
<?php
try {
    require_once 'pdo_connect.php';
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //after writing select statement store result in result query
    $result = $db->query($sql);
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
    $numrows = $result->rowCount();
} catch (Exception $e) {
 $error= $e->getMessage(); 
 ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>