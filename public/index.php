<?php echo "<p>Hello World</p>";
require __DIR__ . '/../app/src/app.php';
require '../api_key.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $client = new HelloSign\Client($apikey);
    $account = $client->getAccount();
    print_r($account);
     ?>
  </body>
</html>
