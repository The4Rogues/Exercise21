
<?php
try {
    require_once 'backend/loan.php';
   
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
                    $chargesDue = chargesDue();
                    foreach($chargesDue as $chargeDue) {
                        echo "<tr>";
                        echo "<td>{$chargeDue['title']}</td>";
                        echo "<td>{$chargeDue['date_in']}</td>";
                        echo "<td>{$chargeDue['date_due']}</td>";
                        echo "<td>{$chargeDue['borrower_full_name']}</td>";
                        echo "<td>{$chargeDue['amount_outstanding']}</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </body>
</html> 
