<?php
// PHP backend logic
session_start();

// Function to get the click count
function getClickCount()
{
    return isset($_COOKIE['click_count']) ? (int)$_COOKIE['click_count'] : 0;
}

// Function to update the click count in the cookie
function updateClickCount($count)
{
    setcookie('click_count', $count, time() + 3600, '/'); // Expires in 1 hour (3600 seconds)
}

// Function to get the current image index
function getCurrentImageIndex()
{
    return isset($_COOKIE['current_image_index']) ? (int)$_COOKIE['current_image_index'] : 0;
}

// Function to update the current image index in the cookie
function updateCurrentImageIndex($index)
{
    setcookie('current_image_index', $index, time() + 3600, '/'); // Expires in 1 hour (3600 seconds)
}

// Function to get the autoclicker state
function getAutoClickerState()
{
    return isset($_SESSION['autoclicker_state']) ? $_SESSION['autoclicker_state'] : false;
}

// Function to set the autoclicker state
function setAutoClickerState($state)
{
    $_SESSION['autoclicker_state'] = $state;
}

// List of image names
$imageNames = array('images/cookie.png', 'images/cookie2.png', 'images/cookie3.png', 'images/cookie4.png');

// Initializing the click count, the current image index, and autoclicker state
$clickCount = getClickCount();
$currentImageIndex = getCurrentImageIndex();
$autoclickerState = getAutoClickerState();

// Processing click action
if (isset($_POST['click'])) {
    $clickCount++;
    updateClickCount($clickCount);

    // Check if it's time to switch the image
    if ($clickCount % 50 == 0) {
        // Add 25 points when the cookie resets
        $clickCount += 25;
        updateClickCount($clickCount);

        $currentImageIndex = ($currentImageIndex + 1) % count($imageNames);
        updateCurrentImageIndex($currentImageIndex);
    }
}

// Processing autoclicker request
if (isset($_POST['submitAutoClicker'])) {
    // Check if the user has enough clicks
    if ($clickCount >= 200) {
        // Toggle autoclicker state
        $autoclickerState = !$autoclickerState;
        setAutoClickerState($autoclickerState);
    } else {
        // Display an error message or take other actions if the user doesn't have enough clicks
        echo "Not enough Currency of Clicks.";
    }
}

// Autoclicker logic
if ($autoclickerState && $clickCount >= 200) {
    // Perform actions for autoclicker
    $clickCount += 1; // Increase the click count by 1 every second
    updateClickCount($clickCount);
    // Add any additional actions for the autoclicker here

    // Check if it's time to switch the image after autoclicker action
    if ($clickCount % 50 == 0) {
        // Add 25 points when the cookie resets
        $clickCount += 25;
        updateClickCount($clickCount);

        $currentImageIndex = ($currentImageIndex + 1) % count($imageNames);
        updateCurrentImageIndex($currentImageIndex);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/8bit-wonder" rel="stylesheet">
    <link rel="stylesheet" href="css/stylecookies.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>CookieClicker</title>
    <style>
        @keyframes spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        #clickerImage {
            animation: spin 10s infinite linear;
        }
    </style>
    <script>
        function updateImageSource(imageSrc) {
            document.getElementById('clickerImage').src = imageSrc;
        }

        function updateClickCount() {
            document.getElementById('clickForm').submit();
        }

        function startAutoClicker() {
            document.getElementById('autoClickerForm').submit();
        }
    </script>
</head>

<body>

    <header>
    <a href="index.php"><img class="logo" src="logo.png" style='height:150px;height:150px;'></a>
    </header>
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

    <div class="ontop">
        <h1>Cookie Clicker</h1>
        <p>Are you hungry enough?</p>
    </div>

    <content>

        <div class="space">
            sd
        </div>
        <section class="content">

            <div class="spel">
                <p>Click Count: <?php echo $clickCount; ?></p>

                <form id="clickForm" method="post" onsubmit="updateClickCount()">
                    <button class="button1" type="submit" name="click">
                        <img id="clickerImage" src="<?php echo $imageNames[$currentImageIndex]; ?>" alt="Click here">
                    </button>
                </form>

                <form id="autoClickerForm" method="post">
                    <button class="button2" type="submit" name="submitAutoClicker">Toggle Autoclicker</button>
                </form>

                <button class="button2" onclick="startAutoClicker()">Start/Stop Autoclicker</button>
            </div>

        </section>

        <score>
            <aside>
                <h3>Scoreboard</h3>
            </aside>
        </score>
    </content>


    <div class="content2">
        <h1>How to play</h1>
        <p>Press the image as much as you want.
            Every 50 clicks, the cookie will get smaller until 200 clicks.
            When the cookie resets, you will receive 25 points.
        </p>
    </div>

    <div class="footer">
        &copy; 2024 Kansloosino
    </div>

</body>

</html>