
<?php
try {
    require_once 'loan.php';
   
} catch (Exception $e) {
    $error= $e->getMessage(); 
    die();
}
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Outstanding Book Fine</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <table>
            <thead>
                <th>Title</th>
                <th>Date Due</th>
                <th>Date in</th>
                <th>Name</th>
                <th>Amount Outstanding</th>
            </thead>
            <tbody>
                <?php
                    $payCharges = payCharges();
                    foreach($payCharges as $payCharge) {
                        echo "<tr>";
                        echo "<td>{$payCharge['title']}</td>";
                        echo "<td>{$payCharge['date_in']}</td>";
                        echo "<td>{$payCharge['date_due']}</td>";
                        echo "<td>{$payCharge['borrower_full_name']}</td>";
                        echo "<td>{$payCharge['amount_outstanding']}</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </body>
</html> 
