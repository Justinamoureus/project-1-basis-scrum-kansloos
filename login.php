<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
<header>
    <img class="logo" src="logo.png" style='height:150px;height:150px;'>
</header>

<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
    </ul>
</nav>

<body>
    <content>
    <div class="wrapper">
        <div class="title">
            login form
        </div>
        <form action="" method="post">
            <div class="field">
                <input type="text" placeholder="Username here" name="user">
            </div>
            <div class="field">
                <input type="date" name="date">
            </div>
            <div class="field">
                <input type="submit" value="submit" name="login">
            </div>
        </form>
    </div>
    <?php
    if (!isset($_COOKIE['user'])) {
        setcookie('user', $_POST['user'], time() + 3600, '/', '', false, true); // Sets a secure, HttpOnly cookie if the user didn't have a cookie before
        $_COOKIE['user'] = $_POST['user']; // Initialize the value
    }
    if (!isset($_COOKIE['date'])) {
        setcookie('date', $_POST['date'], time() + 3600, '/', '', false, true); // Sets a secure, HttpOnly cookie if the user didn't have a cookie before
        $_COOKIE['date'] = $_POST['date']; // Initialize the value
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $age = (new DateTime())->diff(new DateTime($_COOKIE["date"]))->y;
        if ($age < 16) {
            echo "<h2>You are too young to gamble, please leave the site.";
        } else {
            header("Location: index.php");
        }
    }
    ?>

    <score>
        <aside>
            <h3>"Neque porro quisquam est qui dolorem ipsum quia<br> dolor sit amet, consectetur, adipisci velit..."</h3>
        </aside>
    </score>
    </content>
</body>

</html>