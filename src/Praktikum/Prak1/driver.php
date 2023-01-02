<?php

$first_name = 'Charlie';
$last_name = 'Chapplin';
$address = 'Chinastreet 20';
$post_code = 63333;
$city = 'Irgendwo';

echo <<<EOT
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <!-- für später: CSS include -->
   <!-- <link rel="stylesheet" href="XXX.css"/> -->
   <!-- für später: JavaScript include -->
   <!-- <script src="XXX.js"></script> -->
    <title>Fahrer</title>
  </head>

  <body>

    <section>
      <h2>Fahrer</h2>

EOT;

for ($i=0; $i <1; $i++) {
  echo <<<EOT
  <fieldset>
    <legend>Bestellung 42</legend>
    <p>$first_name $last_name, $address, $post_code $city</p>
    <p>Status</p>
    <input type="submit" name="Fertig" value="fertig">
    <input type="submit" name="Unterwegs" value="Unterwegs">
    <input type="submit" name="Geliefert" value="Geliefert">
  </fieldset>
  EOT;
}

echo <<<EOT
</section>
</body>
</html>
EOT;

?>
