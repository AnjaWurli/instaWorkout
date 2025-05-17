<?php session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.php">
    <title>Player</title>
</head>
<?php
    //if redirected from index.php, extract url info from POST method
    $url=htmlspecialchars($_POST["url"]);

    //if no instagram url or no url given, use this token instead (fpr injecting a video)
    $snippet="DIj9VcfxDUm";

    //check if url is valid
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        //extract video token from url ("https://instagram.com/reel/...*token*.../?..")
        preg_match('/reel\/([^\/\?]+)\//', $url, $matches);
        $snippet= $matches[1];

            //store number of generated videos in this session in the session storage
            if($_SESSION["reel_number"]){
                $_SESSION["reel_number"]++;
            }
            else {
                $_SESSION["reel_number"]=1;
            }
        //generate a key for the token to store it in the session storage too
        $key=$_SESSION["reel_number"];
        $_SESSION["v".strval($key)]=$snippet;
    } 

    //if redirected from playlist, extract video token from POST method
    if($_POST["token"]){
        $snippet=$_POST["token"];
    }

    ?>

<body>
    <h1>Player</h1>
    <?php 
        echo '<form method="POST" action="index.php" class="home_btn">
                <input type="submit" value="add another..."/>
                </form>';
    ?>

    <div id="insta">
        <blockquote class="instagram-media"
            data-instgrm-permalink="https://www.instagram.com/reel/<?=$snippet?>/?utm_source=ig_embed&amp;utm_campaign=loading"
            data-instgrm-version="14">
            <div style="padding:16px;"> <a
                    href="https://www.instagram.com/reel/<?=$snippet?>/?utm_source=ig_embed&amp;utm_campaign=loading"
                    style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                    target="_blank">
                </a>

            </div>
        </blockquote>
        <script async src="//www.instagram.com/embed.js"></script>
    </div>

    <div class="timer_cont">
        <h3>Timer</h3>
        <h2>30s</h2>
        <form action="">
            <input type="number" step="5" name="timer" id="input_timer">
            <input type="submit" value="start" name="time">
        </form>

    </div>
    <div class="playlist_cont">
        <h3>Playlist</h3>
        <?php
            //generate a playlist button for each video
            $keys=$_SESSION["reel_number"];
            for($i=0;$i<=$keys;$i++){
               $token= $_SESSION["v".$i];
               if($token){
               echo '<li class="playlist_el">
               <form method="POST" >
                <input type="hidden" name="token" value="'.$token.'"/>
                <input type="submit" name="playOther" value="video '.$i.'" class="playlist_el_sub"/>
                </form>
                </li>';
               }
            }
            //delete session storage button
            if($keys>0){
                echo '<form method="POST" class="home_btn">
                <input type="submit" name="deleteList" value="delete list"/>
                </form>';
            }
        ?>

    </div>


</body>

</html>

<?php
//delete session storage
 if($_POST["deleteList"]){
    session_unset();
    session_destroy();
   header("location: index.php");
};
?>