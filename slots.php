<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" value="gamble" name="spin">
    </form>
    <img src="" alt="">
    <?php

    $odds = [1,2,3,4,5,6];
    $multipleoutcomes = [];
    if (isset($_POST['spin']) && !empty($_POST['spin'])) {
        for ($x = 0; $x <= 2; $x++) {
            $randomindex = array_rand($odds);
            $outcome = $odds[$randomindex];
            $multipleoutcomes[] = $outcome;
        }
        
    }

    foreach ($multipleoutcomes as $value) {
        echo "<h3>$value</h3>";
        switch ($value) {
            case 1:
                echo "<img src='placeholder1.jpg'>";
                break;
            case 2: 
                echo "<img src='placeholder2.jpg'";
                break;
            case 3:
                echo "<img src='placeholder3.jpg'";
                break;
            case 4:
                echo "<img src='placeholder4.jpg'";
                break;
            case 5:
                echo "<img src='placeholder5.jpg'";
                break;
            case 6:
                echo "<img src='placeholder6.jpg'";
                break;
        }
    }

    ?>
</body>
</html>