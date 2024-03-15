<?php
// zorgt er voor dat de score wordt bijgehouden van mijn game.
include 'scorehandler.php';

// een associatieve array met naam/antwoord en het daarbij horend logo.
$brands = array(
    1 => array("name" => "Alfa Romeo", "image" => "images/Brand1.jpg"),
    2 => array("name" => "Bentley", "image" => "images/Brand2.jpg"),
    3 => array("name" => "Cadillac", "image" => "images/Brand3.jpg"),
    4 => array("name" => "Chevrolet", "image" => "images/Brand4.jpg"),
    5 => array("name" => "Citroen", "image" => "images/Brand5.jpg"),
    6 => array("name" => "Dodge", "image" => "images/Brand6.jpg"),
    7 => array("name" => "Ferrari", "image" => "images/Brand7.jpg"),
    8 => array("name" => "Cars", "image" => "images/Brand8.jpg"),
    9 => array("name" => "Infinity", "image" => "images/Brand9.jpg"),
    10 => array("name" => "Jaguar", "image" => "images/Brand10.jpg"),
    11 => array("name" => "Lamborghini", "image" => "images/Brand11.jpg"),
    12 => array("name" => "Lexus", "image" => "images/Brand12.jpg"),
    13 => array("name" => "Maserati", "image" => "images/Brand13.jpg"),
    14 => array("name" => "Mazda", "image" => "images/Brand14.jpg"),
    15 => array("name" => "Mercedes", "image" => "images/Brand15.jpg"),
    16 => array("name" => "Peugeot", "image" => "images/Brand16.jpg"),
    17 => array("name" => "Rolls Royce", "image" => "images/Brand17.jpg"),
    18 => array("name" => "Saab", "image" => "images/Brand18.jpg"),
    19 => array("name" => "Buick", "image" => "images/Brand19.jpg"),
    20 => array("name" => "Subaru", "image" => "images/Brand20.jpg"),
    21 => array("name" => "Volkswagen", "image" => "images/Brand21.jpg"),
    22 => array("name" => "Volvo", "image" => "images/Brand22.jpg"),
    23 => array("name" => "Aston Martin", "image" => "images/Brand23.jpg"),
    24 => array("name" => "BMW", "image" => "images/Brand24.jpg"),
    25 => array("name" => "Renault", "image" => "images/Brand25.jpg"),
);
// kijkt of de game is begonnen of voor een nieuwe ronde
$startGameClicked = isset($_POST['start_game']);
$newRound = isset($_POST['new_round']);
$roundCount = isset($_POST['round_count']) ? (int)$_POST['round_count'] : 0;

// kiest de afbeelding voor de rondes 
$usedImages = isset($_POST['used_images']) ? unserialize($_POST['used_images']) : array();


if ($startGameClicked || $newRound) {
    // randomizer die door gaat tot er een nummer voorkomt die nog niet is geweest in de huidige game
    do {
        $randomNumber = rand(1, 25);
    } while (in_array($randomNumber, $usedImages));

    $randomBrand = $brands[$randomNumber];
    $usedImages[] = $randomNumber;
    $roundCount++;
} else {
    $randomNumber = isset($_POST['random_number']) ? $_POST['random_number'] : null;
    $randomBrand = $randomNumber ? $brands[$randomNumber] : null;
}

$userGuess = isset($_POST['user_guess']) ? htmlspecialchars($_POST['user_guess']) : "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the Brand</title>
</head>

<body>
    <?php
    // ;aat de knop met start game zien als die nog niet is begonnen of tot ronde 5 is
    if (!$randomNumber || $roundCount > 5) {
        echo '<form method="post"><button type="submit" name="start_game" class="start-button"><u>START</u> Engine</button></form>';
    } else {
        // Game bezig dan laat die de container zien
    ?>
        <section class="game-container">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                echo "<p>Round: $roundCount</p>";
                if ($userGuess !== "") {
                    echo "<p>Your guess: $userGuess</p>";
                    echo "<p>Correct answer: {$randomBrand['name']}</p>";
                    if (strcasecmp($userGuess, $randomBrand['name']) === 0) {
                        echo "<p style='color: green;'>Congratulations! You guessed it right!</p>";
                        scoreHandler(2);
                    } else {
                        echo "<p style='color: red;'>Sorry, that's incorrect. Try again!</p>";
                    }
                }
            }
            ?>
            <?php if ($userGuess === "") { // laat de afbeelding en de textbox zien voor het raden
            ?>
                    <img class="CarImg" src="<?php echo $randomBrand['image']; ?>" alt="Brand Image">
                    <form method="post">
                        <input type="hidden" name="random_number" value="<?php echo $randomNumber; ?>">
                        <input type="hidden" name="round_count" value="<?php echo $roundCount; ?>">
                        <input type="hidden" name="used_images" value="<?php echo serialize($usedImages); ?>">
                        <label for="user_guess"></label>
                        <input type="text" id="user_guess" name="user_guess" required maxlength="16">
                        <button type="submit" class="fancy-button">Submit Guess</button>
                    </form>
                <?php } else if ($roundCount <= 5) { // laat de Next Image knop zien in de tussen rondes 
                ?>
                    <form method="post">
                        <input type="hidden" name="random_number" value="<?php echo $randomNumber; ?>">
                        <input type="hidden" name="round_count" value="<?php echo $roundCount; ?>">
                        <input type="hidden" name="used_images" value="<?php echo serialize($usedImages); ?>">
                        <button type="submit" name="new_round" class="fancy-button">Next Round</button>
                    </form>
            <?php } ?>
        </section>

    <?php } ?>
</body>

</html>