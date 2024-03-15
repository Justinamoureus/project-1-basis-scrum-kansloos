<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.cdnfonts.com/css/8bit-wonder" rel="stylesheet">
    <link rel="stylesheet" href="css/spel2.css">
    <title>Home</title>
</head>

<body>
    <header class="header">
        <img class="logo" src="logo.png" style='height:150px;'>
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



    <!-- Page content goes here -->
    <div class="ontop">
        <h1>spel 2</h1>
        <p class="text">Waar of Niet waar?</p>
    </div>
    <content>
            <div>

            </div>
            <section class="content">
            <div class="spel">
                <div id="quiz-container">
                    <h1 class="title">Waar of Niet Waar Ruimte Quiz!</h1>

                    <form action="spel2.php" method="post">


                        <div class="question-container">
                            <p>Vraag 1: Er zijn maar 8 Planeten in ons zonnestelsel. Waar of Niet waar?</p>
                            <label>
                                <input type="radio" name="question1" value="true" required> True
                            </label>
                            <label>
                                <input type="radio" name="question1" value="false" required> False
                            </label>
                        </div>


                        <div class="question-container">
                            <p>Vraag 2: De Melkweg is het enige sterrenstelsel in het heelal. Waar of niet waar?</p>
                            <label>
                                <input type="radio" name="question2" value="true" required> True
                            </label>
                            <label>
                                <input type="radio" name="question2" value="false" required> False
                            </label>
                        </div>

                        <div class="question-container">
                            <p>Vraag 3: De grootste planeet in ons zonnestelsel is Jupiter. Waar of niet waar?</p>
                            <label>
                                <input type="radio" name="question3" value="true" required> True
                            </label>
                            <label>
                                <input type="radio" name="question3" value="false" required> False
                            </label>
                        </div>

                        <div class="question-container">
                            <p>Vraag 4: Een jaar op Mars is langer dan een jaar op Aarde. Waar of niet waar?</p>
                            <label>
                                <input type="radio" name="question4" value="true" required> True
                            </label>
                            <label>
                                <input type="radio" name="question4" value="false" required> False
                            </label>
                        </div>

                        <div class="question-container">
                            <p>Vraag 5: Klopt het dat de ruimte elke seconde groter wordt. Waar of niet waar? </p>
                            <label>
                                <input type="radio" name="question5" value="true" required> True
                            </label>
                            <label>
                                <input type="radio" name="question5" value="false" required> False
                            </label>
                        </div>

                        <div class="question-container">
                            <p>Vraag 6: De Zon is een ster. Waar of niet waar?</p>
                            <label>
                                <input type="radio" name="question6" value="true" required> True
                            </label>
                            <label>
                                <input type="radio" name="question6" value="false" required> False
                            </label>
                        </div>

                        <div class="question-container">
                            <p>Vraag 7: Saturnus heeft de grootste hoeveelheid manen in ons zonnestelsel.</p>
                            <label>
                                <input type="radio" name="question7" value="true" required> True
                            </label>
                            <label>
                                <input type="radio" name="question7" value="false" required> False
                            </label>
                        </div>

                        <div class="question-container">
                            <p>Vraag 8: De maan heeft een eigen lichtbron. Waar of niet waar?</p>
                            <label>
                                <input type="radio" name="question8" value="true" required> True
                            </label>
                            <label>
                                <input type="radio" name="question8" value="false" required> False
                            </label>
                        </div>

                        <div class="question-container">
                            <p>Vraag 9: De Zon draait om de aarde heen. Waar of niet waar?</p>
                            <label>
                                <input type="radio" name="question9" value="true" required> True
                            </label>
                            <label>
                                <input type="radio" name="question9" value="false" required> False
                            </label>
                        </div>

                        <div class="question-container">
                            <p>Vraag 10: Is de zwaartekracht in de ruimte sterker dan de zwaartekracht op aarde?</p>
                            <label>
                                <input type="radio" name="question10" value="true" required> True
                            </label>
                            <label>
                                <input type="radio" name="question10" value="false" required> False
                            </label>
                        </div>

                        <input type="hidden" name="total_questions" value="10">

                        <button type="submit">Controleer Quiz</button>
                    </form>
                </div>


                <div id="result-container">
                    <h1 class="result">Quiz Resultaten...</h1>

                    <?php
                    $correct_answers = ['true', 'false', 'true', 'true', 'true', 'true', 'true', 'false', 'false', 'false'];
                    $user_answers = [];

                    $total_questions = isset($_POST['total_questions']) ? $_POST['total_questions'] : 0;

                    for ($i = 1; $i <= $total_questions; $i++)

                        for ($i = 1; $i <= $_POST['total_questions']; $i++) {
                            $user_answers[] = $_POST['question' . $i];
                        }

                    for ($i = 0; $i < count($user_answers); $i++) {
                        $question_number = $i + 1;
                        $answer_class = ($user_answers[$i] == $correct_answers[$i]) ? 'correct' : 'incorrect';
                        echo "<div class='question-container $answer_class'><p>Vraag $question_number: ";
                        if ($user_answers[$i] == $correct_answers[$i]) {
                            echo "Correct!</p></div>";
                        } else {
                            echo "Onjuist!</p></div>";
                        }
                    }
                    ?>

                    <a href="spel2.php">Opnieuw Proberen?</a>
                </div>
            </div>
            </section>
            <score>
                <aside>
                    <h3>Scoreboard</h3>
                </aside>
            </score>
    </content>
    </div>
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