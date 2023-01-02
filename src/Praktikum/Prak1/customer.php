<?php

$number_of_pizza = 2;
$pizzas = array("Salami", "Thunfisch", "Magharita");

echo <<<EOT
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8" />
    <!-- für später: CSS include -->
    <!-- <link rel="stylesheet" href="XXX.css"/> -->
    <!-- für später: JavaScript include -->
    <!-- <script src="XXX.js"></script> -->
    <title>Kunde</title>
</head>
<body>
    <section>
    <h1>Kunde</h1>
EOT;


for($i=0; $i<=$number_of_pizza; $i++) {
    echo <<<EOT

    <fieldset>
    <legend>$pizzas[$i]</legend>
        <input type="radio" id="bestellt$i" name="pizza $pizzas[$i]" value="bestellt" checked>
        <label for="bestellt$i" >Bestellt</label><br>
        <input type="radio" id="im_ofen$i" name="pizza $pizzas[$i]" value="im_ofen">
        <label for="im_ofen$i" >Im Ofen</label><br>
        <input type="radio" id="fertig$i" name="pizza $pizzas[$i]" value="fertig">
        <label for="fertig$i" >Fertig</label><br>
        <input type="radio" id="unterwegs$i" name="pizza $pizzas[$i]" value="unterwegs">
        <label for="unterwegs$i" >Unterwegs</label><br>
        <input type="radio" id="geliefert$i" name="pizza $pizzas[$i]" value="geliefert">
        <label for="geliefert$i" >Geliefert</label><br>
    </fieldset>

EOT;

}

echo <<<EOT

</section>
</body>
</html>

EOT;
?>
