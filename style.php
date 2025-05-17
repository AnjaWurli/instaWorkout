<?php
header("Content-type: text/css");
$text_color="rgb(234, 189, 235)";
?>

html {
box-sizing: border-box;
font-family:sans-serif;
color:<?=$text_color?>;
}

h1{
font-size:3rem;
}

body{
background: #020024;
background: linear-gradient(126deg, rgba(2, 0, 36, 1) 0%, rgba(119, 9, 121, 1) 35%, rgba(0, 255, 179, 1) 100%);
min-height: 100vh;
text-align:center;
}

input{
padding:1rem;
border-radius:1rem;
cursor:pointer;
}

input[type="submit"] {
background: rgba(0, 0, 0, 1);
border:none;
color:<?=$text_color?>;
}

input[type="submit"]:hover {
box-shadow:black 0 0 0.5rem;

}

input[type="text"],input[type="number"] {
background: rgba(46, 45, 45, 0.4);
}

input[type="text"]:focus,input[type="number"]:focus {
background: rgba(255, 255, 255, 0.2);
outline-color:rgba(255, 255, 255, 0.2);
}

.container{
width:80vw;
margin:auto;
background:rgba(255, 255, 255, 0.2);
padding: 2rem;
padding-top:1rem;
margin-top:5vw;
border-radius:0.5rem;
}

p{
font-family:Avantgarde,sans-serif;
}

.form_url{
display:flex;
gap:1rem;
}

#input_url{
flex-grow:1;
}

#insta{
margin:auto;
display:flex;
justify-content:center;
}

.instagram-media{
background:rgba(255, 255, 255, 0.2);
border:0;
border-radius:3px;
box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15);
max-width:540px;
min-width:326px;
padding:0;
width:99.375%;
width:-webkit-calc(100% - 2px);
width:calc(100% - 2px);
}

.timer_cont{
position: -webkit-sticky;
position: sticky;
bottom:1rem;
margin-left:auto;
background:rgba(0, 0, 0, 0.7);
backdrop-filter: blur(1px);
width:70vw;
border-radius:0.5rem;
padding:1rem 2rem 1rem 2rem;

}

input[type="number"]{
width:3rem;
color:<?=$text_color?>;
}

.home_btn{
text-align:left;
}

.playlist_cont{
position: -webkit-sticky;
position: sticky;
bottom:1rem;
margin-left:auto;
background:rgba(0, 0, 0, 0.7);
backdrop-filter: blur(1px);
width:30vw;
border-radius:0.5rem;
padding:1rem 2rem 1rem 2rem;

}

.playlist_el{
display:flex;
justify-content:end;
}

.playlist_el_sub{
background:rgba(0,0,0,0) !important;
}