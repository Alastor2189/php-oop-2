<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali. :catrainbow: :cool-doge:
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti. :carello_della_spesa:
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
Buon lavoro -->
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<?php
require_once __DIR__ . "/food.php";
require_once __DIR__ . "/toy.php";
require_once __DIR__ . "/user.php";

// Product list
//food

$croquetteCat = new food("Cat01", "croquette for cat", "300gr", "€ 3,99", "CAT", "30/12/2025");
$moistmeatCat = new food("Cat02", "moist meat for cat", "200gr", "€ 1,99", "CAT", "23/07/2025");
$croquetteDog = new food("Dog01", "croquette for dog", "500gr", "€ 5,99", "CAT", "30/02/2025");
$moistmeatDog = new food("Dog02", "moist meat for dog", "400gr", "€ 3,99", "CAT", "21/09/2023");

// food
// toys
$mouseCat = new animalToy("CT01", "fake mouse for cat", "undefined", "€ 7,99", "adult cat", "red");
$ballCat = new animalToy("CT02", "ball for cat", "undefined", "€ 4,99", "adult cat", "blue");
$ballDog = new animalToy("DT03", "ball for dog", "undefined", "€ 4,99", "for all dog", "blue");
// toys

// user

$gianluca = new User("Gianluca", "Rommel", "0705678987", "rommel@gmail.com", "true");
$michele = new User("Michele", "Bonaparte", "070987654", "bonaparte@gmail.com", "false");
// user

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>