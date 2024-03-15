<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/slot.css">
    <link href="https://fonts.cdnfonts.com/css/8bit-wonder" rel="stylesheet">

    <title>Home</title>
</head>

<body>
    <header>
        <img class="logo" src="logo.png" style='height:150px;height:150px;'>
    </header>
    <!-- Common Navbar -->
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="spel1.php">Slot Machine</a></li>
            <li><a href="spel2.php">Quiz</a></li>
            <li><a href="spel3.php">Cookie Clicker</a></li>
            <li><a href="spel4.php">Guess the brand</a></li>
            <li><a href="spel5.php">Head or Tails</a></li>
        </ul>
    </nav>
    <content>
        <!-- Page content goes here -->
        <section class="content">
            <div class="ontop">
            <h1 class="title">Slot machine</h1>
            <p>Wanna spin your odds :)</p>
            </div>
            <div>

            </div>
            <div class="spel">

                <form action="" method="post">
                    <input type="submit" value="gamble" name="spin">
                </form>
                <?php

                include 'scorehandler.php'; // Including the scoremanager

                $messageBlock = false;
                $messageBlock2 = false;

                $odds = [1, 2, 3, 4, 5, 6]; //Possibilities
                $multipleoutcomes = [];
                if (isset($_POST['spin']) && !empty($_POST['spin'])) { // Checks if the "spin" button is pressed.
                    $credits = scoreHandler(0);
                    if ($credits <= 0) {
                        echo "<h2>You do not have enough credits to play this game!</h2>";
                        return;
                    }
                    scoreHandler(-5);
                    for ($x = 0; $x <= 2; $x++) { // Grabs a random number out of the array looping it 3 times.
                        $randomindex = array_rand($odds);
                        $outcome = $odds[$randomindex];
                        $multipleoutcomes[] = $outcome;
                    }
                    $areAllSame = count(array_unique($multipleoutcomes)) === 1; // Checks if all the numbers are the same.

                    if ($areAllSame) {
                        foreach ($multipleoutcomes as $value) {
                            if ($value == 1) { // Gives a jackpot if you hit "1 1 1"
                                if (!$messageBlock) {
                                    scoreHandler(75); // Calls the scoreHandler function from scorehandler.php, storing the score on a site-wide cookie.
                                    echo "<h2>Jackpot! +75 points!</h2>";
                                    $messageBlock = true;
                                }
                            } elseif ($value <= 6 && $value >= 2) { // Checks if they still have the same numbers but provides a lower reward since it's not a jackpot
                                if (!$messageBlock2) {
                                    scoreHandler(12);
                                    echo "<h2>You have won 12 points!</h2>";
                                    $messageBlock2 = true;
                                }
                            }
                        }
                    } else {
                        echo "<p>Sorry, try again. Better luck next time!</p>"; // Provides 0 reward if lose.
                    }
                }

                foreach ($multipleoutcomes as $value) {
                    switch ($value) { // Checks which numbers were obtained and provides the right image for each of them.
                        case 1:
                            echo "<img src='images/7.png' style='width:100px;height:100px;'>";
                            break;
                        case 2:
                            echo "<img src='images/barbarbar.png' style='width:100px; height:100px;'>";
                            break;
                        case 3:
                            echo "<img src='images/cherry.png' style='width:100px; height:100px;'>";
                            break;
                        case 4:
                            echo "<img src='images/watermelon.png' style='width:100px; height:100px;'>";
                            break;
                        case 5:
                            echo "<img src='images/diamond.png' style='width:100px; height:100px;'>";
                            break;
                        case 6:
                            echo "<img src='images/heart.png' style='width:100px; height:100px;'>";
                            break;
                    }
                }

                ?>
            </div>
        </section>
        <score>
            <aside>
                <h2>Scoreboard</h2>
            </aside>
        </score>
    </content>

    <!-- Page content goes here -->
    <div class="content2">
        <h1>Uitleg van het spel</h1>
        <p>Toevoeging</p>
    </div>

    <!-- Include the footer -->
    <div class="footer">
        &copy; 2024 Kansloosino
    </div>
</body>

</html>