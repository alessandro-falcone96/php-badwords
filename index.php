<?php
    $paragrafo = "ciao a tutti cazzo";
    $badword = $_GET["badword"];
    $paragrafo = str_replace($badword, "***", $paragrafo);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Badwords</title>
  </head>
  <body>
    <H1><?php echo $paragrafo ?></H1>
    <h2>La lunghezza del paragrafo è di <?php echo strlen($paragrafo) ?> caratteri</h2>
    <h2><?php echo $badword ?></h2>
  </body>
</html>