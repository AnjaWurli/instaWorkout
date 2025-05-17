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

    <div class="toggle_cont">
        <label for="toggleTime" class="toggle">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 6H11V7C11 7.55228 11.4477 8 12 8C12.5523 8 13 7.55228 13 7V6Z" fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M6 2V4H7V7C7 9.76142 9.23858 12 12 12C9.23858 12 7 14.2386 7 17V20H6V22H18V20H17V17C17 14.2386 14.7614 12 12 12C14.7614 12 17 9.76142 17 7V4H18V2H6ZM9 4H15V7C15 8.65685 13.6569 10 12 10C10.3431 10 9 8.65685 9 7V4ZM9 17V20H15V17C15 15.3431 13.6569 14 12 14C10.3431 14 9 15.3431 9 17Z"
                    fill="currentColor" />
            </svg>
        </label>
        <input type="checkbox" name="toggleTime" class="toggle check_toggle" checked />
        <div class="timer_cont">
            <h3>Timer</h3>
            <h2 id="time" hidden> </h2>
            <form action="">
                <input type="number" step="5" name="timer" id="input_timer" min="0" max="300">
                <input type="submit" value="start" name="time" id="start_timer">
            </form>
        </div>
    </div>

    <div class="toggle_cont2">
        <label for="togglePlaylist" class="toggle">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 5H4V7H16V5Z" fill="currentColor" />
                <path d="M16 9H4V11H16V9Z" fill="currentColor" />
                <path d="M4 13H12V15H4V13Z" fill="currentColor" />
                <path d="M20 16L14 13V19L20 16Z" fill="currentColor" />
            </svg>
        </label>
        <input type="checkbox" name="togglePlaylist" class="toggle check_toggle" checked />
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
                echo '<form method="POST" class="del_btn">
                <input type="submit" name="deleteList" value="delete list"/>
                </form>';
            }
        ?>

        </div>
    </div>

    <script src="script.js"></script>
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