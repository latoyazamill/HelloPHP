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
    $file = $client->getFiles('421259cd9cb717bee8510e4e7fc92cd46f7aab3a', $dest_file_path, HelloSign\SignatureRequest::FILE_TYPE_PDF);
    print_r($file);
     ?>
  </body>
</html>
