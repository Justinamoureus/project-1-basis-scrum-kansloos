<?php

// Include scorehandler.php
include "scorehandler.php";

// Initialize score
$score = 0;

// Function to simulate coin toss
function flipCoin()
{
    return ["Heads", "Tails"][random_int(0, 1)];
}

// Handle user response for score
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userChoice = $_POST['choice'];
    $result = flipCoin();
    usleep(1500000);
    $isCorrect = ($userChoice === $result);
    $points = ($isCorrect) ? 1 : 0;
    $score += $points;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heads or Tails Game</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style5.css">
    <link href="https://fonts.cdnfonts.com/css/8bit-wonder" rel="stylesheet">
</head>

<body>

    <header class="header">

        <br><a href="index.php"><img class="logo" src="logo.png" style='height:150px;height:150px;'></a><br>
        <div class="headertext">
            Kansloosino
        </div>
    </header>

    <!-- Common Navbar -->
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="spel1.php">Slot Machine</a></li>
            <li><a href="spel2.php">Quiz</a></li>
            <li><a href="spel3.php">Cookie Clicker</a></li>
            <li><a href="spel4.php">Guess the Brand</a></li>
            <li><a href="spel5.php">Heads or Tails</a></li>
        </ul>
    </nav>

    <content>
        <section class="content">
            <div class="ontop">
                <h1 class="title">Heads or Tails!</h1>
                <p>Choose between Heads or Tails!</p>
            </div>
            <div class="game">
                <form method="post" class="button">
                    <button type="submit" class="button" name="choice" value="Heads">Heads</button>
                    <p>OR</p>
                    <button type="submit" class="button" name="choice" value="Tails">Tails</button>
                </form>
                <div>
                    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
                        <!-- Checks if the post request is made -->
                        <div class="answer">
                            <?php
                            if ($isCorrect) {
                                // If the choice is correct, displays a correct message and the result
                                echo "<br>Correct! It's $result<br>";
                            } else {
                                // If the choice is correct, displays a incorrect message and the result
                                echo "<br>Incorrect! It's $result<br>";
                            }
                            ?>
                            <!-- generate image source and alternative text based on the result of the coin flip -->
                            <img src='images/<?php echo strtolower($result); ?>.png' alt='<?php echo $result; ?>' class='result-img'>
                        </div>
                        <!-- End of if statement -->
                    <?php endif; ?>
                </div>
                <a href="spel5.php"><button>Try Again!</button></a>
            </div>
        </section>

        <score>
            <aside>
                <h3>Scoreboard</h3>
                <?php echo scoreHandler($score); ?>
            </aside>
        </score>
    </content>

    <div class="content">
        <h1>About the Game</h1>
        <p>Choose between Heads or Tails and check if you win</p>
    </div>

    <div class="footer">
        &copy; 2024 Kansloosino
    </div>

</body>

</html>