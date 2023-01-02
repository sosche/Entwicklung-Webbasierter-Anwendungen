<?php

//später Preise aus DB holen und dann in var speichern
$price_salami = 4.50;
$price_magherita = 4.00;
$price_hawaii = 5.50;
$total_price = 14.50;

echo <<<EOT

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8" />
    <!-- für später: CSS include -->
    <!-- <link rel="stylesheet" href="XXX.css"/> -->
    <!-- für später: JavaScript include -->
    <!-- <script src="XXX.js"></script> -->
    <title>Pizzaservice</title>
</head>
<body>
    <h1>Bestellung</h1>

    <section>
        <h2>Speisekarte</h2>

        <img src="pizza.png" width="150" height="150" alt="" title="margherita pizza" />
        <p>Margherita</p>
        <p>4,00 €</p>

        <img src="pizza.png" width="150" height="150" alt="" title="salami pizza"/>
        <p>Salami</p>
        <p>4,50 €</p>

        <img src="pizza.png" width="150" height="150" alt="" title="hawaii pizza"/>
        <p>Hawaii</p>
        <p>5,50 €</p>
    </section>

    <section>
      <h2>Warenkorb</h2>

        <form action="https://echo.fbi.h-da.de" method="POST">
          <label for="Auswahl">Ihre Auswahl: </label><br>
            <select name="Auswahl[]" size="10" tabindex="1" multiple id="Auswahl">
                <!--Statisch muss später ersetzt werden-->
                <option selected>Salami</option>
                <option selected>Hawaii</option>
                <option selected>Salami</option>
            </select>
          <!--Muss später durch query ersetzt werden-->
            <p>14,50 €</p>

            <label for="Adresse">Adresse: </label>
                <input type="text" id="Adresse" placeholder="Ihre Adresse" value="" name="Adresse"  /><br>

                <input id="reset" type="reset" name="alle_loeschen" value="Alle löschen" />

                <input id="auswhal_loeschen" type="button" name="auswhal_loeschen" value="Auswahl löschen" />

                <input id="Bestellen" type="submit" value="Bestellen" />

        </form>
    </section>
</body>
</html>


EOT;
?>
