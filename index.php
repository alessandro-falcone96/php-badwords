<?php
    $paragrafo = "Ciao cazzo a tutti!";
    $badword = $_GET["badword"];
    $asterisks = "";
    for ($x = 1; $x <= strlen($badword); $x++) {
        $asterisks .= "*";
      }
    $paragrafo = str_replace($badword, $asterisks, $paragrafo);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Badwords</title>
  </head>
  <body>
    <H1><?php echo $paragrafo ?></H1>
    <p>La lunghezza del paragrafo è di <?php echo strlen($paragrafo) ?> caratteri.</p>
  </body>
</html>