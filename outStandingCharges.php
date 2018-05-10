<?php
try {
    require_once 'backend/loan.php';

} catch (Exception $e) {
    $error = $e->getMessage();
    die();
}

?>

  <!DOCTYPE html>

  <html>

  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Charges Overdue</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous">

  </head>

  <body>
  <?php
  if (isset($_POST['borrowed_item_id'])) {
      payFine($_POST['borrowed_item_id'], 1);
      echo "<h3>Payment submitted</h3>";
      echo "<a href= 'index.php'>Return to homepage</a><br>";
  
  }
  ?>
    <section class="w3-container">
      <div class="form-wrapper">
        <h2>&nbsp;&nbsp;&nbsp;&nbsp;Overdue Loan</h2>
        <p>

          <div class="row">
            <div class="w3-green col-xs-3">Title</div>
            <div class="w3-green col-xs-3">Date Due &nbsp; &nbsp;&nbsp;&nbsp; Date In</div>
            <div class="w3-green col-xs-2">Name</div>
            <div class="w3-green col-xs-2">Amount due</div>
            <div class="w3-green col-xs-2">&nbsp;</div>
          </div>
          <br>

          <?php foreach (chargesDue() as $chargeDue) {?>

          <div class="row">
            <div class="col-xs-3">
              <?=$chargeDue['title'];?>
            </div>
            <div class="col-xs-3">
              <?=$chargeDue['date_due'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?=$chargeDue['date_in'];?>
            </div>
            <div class="col-xs-2">
              <?=$chargeDue['borrower_full_name'];?>
            </div>
            <div class="col-xs-2">
              <?=$chargeDue['amount_outstanding'];?>
            </div>
             <div class="col-xs-2">
           <form action="" method="POST"> <input type="hidden" name="borrowed_item_id" value="<?=$chargeDue['id'];?>" />
           <input type="hidden" name="amount_due" value="<?=$chargeDue['amount_outstanding'];?>" />
           <button type="submit" class="btn btn-primary">Pay Fine</button> </form>
            </div>
          </div>
            <br>
          <?php }?>
      </div>

    </section>
  </body>

  </html>