<?php session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.php">
    <title>Workout with Instagram</title>
</head>

<body>
    <div class="container">
        <h1>Workout with Instagram</h1>
        <p>Do you want to do the training exercises that creators share on Instagram, but the videos can't be paused? No
            problem, welcome on your training tool for Instagram Videos.</p>
        <form action="player.php" method="post" class="form_url">
            <input type="text" name="url" id="input_url" placeholder="https://www.instagram.com/reel/ ...">
            <input type="submit" name="generatePlayer " value="generate player">
        </form>
    </div>
</body>

</html>
<?phP
/*
    foreach($_SESSION as $key=>$value){
        echo $key." ".$value."<br>";
    }
*/
        ?>