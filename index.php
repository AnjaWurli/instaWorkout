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
    <div class="container feat">
        <p>features:</p>
        <ul>
            <li>playlist with multiple videos</li>
            <li>timer for exercise duration</li>
        </ul>
        <hr />
        <div class="foot">
            <a href="https://github.com/AnjaWurli/instaWorkout">
                <svg aria-hidden="true" class="octicon octicon-mark-github" height="24" version="1.1"
                    viewBox="0 0 16 16" width="24">
                    <path fill-rule="evenodd" fill="rgb(234, 189, 235)"
                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z">
                    </path>
                </svg>
            </a>
        </div>
    </div>
</body>

</html>
<?phP
/*
TODO: input sensitivity for url input field

    foreach($_SESSION as $key=>$value){
        echo $key." ".$value."<br>";
    }
*/
        ?>