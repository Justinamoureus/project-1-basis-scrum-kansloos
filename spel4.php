<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/brand.css">
    <link href="https://fonts.cdnfonts.com/css/8bit-wonder" rel="stylesheet">

    <title>GuessTheBrand</title>
</head>

<body>
    <header class="header">
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


    <!-- Page content goes here -->
    <div class="content">
        <h1>Guess the Brand</h1>
    </div>
    <section class="spelaside">
        <div>
            
        </div>
    <div class="spel">
        <?php
        include 'GuessTheBrand.php';
        ?>
    </div>
    <score>
    <aside>
        <h3>Scoreboard</h3>
    </aside>
    </score>
    </section>
    <!-- Page content goes here -->
    <div class="content">
        <h1 class="">About the game</h1>
        <p>Embark on the 'Guess The Brand' quiz by starting the game. Go through a series of mysterious car logos, and type the brand name as your answer. Progress through challenging levels to test your automotive knowledge. Earn your points with the right answer, and prove you're the ultimate Car Logo Master. Dive into the excitement of typing in your answers to identify each logo</p>
    </div>

    <!-- Include the footer -->
    <div class="footer">
        &copy; 2024 Kansloosino.
    </div>
    <score>

</body>

</html>