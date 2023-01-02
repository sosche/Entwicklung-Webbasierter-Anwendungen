<?php

$order_counter = 1;
$order = array("Salami");

echo <<<EOT

<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
   <!-- für später: CSS include -->
   <!-- <link rel="stylesheet" href="XXX.css"/> -->
   <!-- für später: JavaScript include -->
   <!-- <script src="XXX.js"></script> -->
    <title>Bäcker</title>
  </head>

  <body>
    <section>
      <h2>Bäcker</h2>

EOT;

for ($i=0; $i < $order_counter; $i++) {
  echo <<<EOT
  <fieldset>
    <legend>Bestellung $i Pizza $order[$i]</legend>
    <input type="submit" name="pizza $order[$i]" value="bestellt">
    <input type="submit" name="pizza $order[$i]" value="im ofen">
    <input type="submit" name="pizza $order[$i]" value="fertig">
  </fieldset>
  EOT;
}

echo <<<EOT
</section>

</body>
</html>
EOT;

?>
