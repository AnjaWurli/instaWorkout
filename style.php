<?php
header("Content-type: text/css");
$text_color="rgb(234, 189, 235)";
?>

html {
box-sizing: border-box;
font-family:sans-serif;
color:<?=$text_color?>;
}

header{
display:flex;
flex-direction: row-reverse;
width:100vw;
justify-content: stretch;
}

h1{
font-size:3rem;
flex-grow:2;
}

.home_form{
display:flex;
align-items:center;
}

.home_btn{
background:rgba(0,0,0,0) !important;
text-decoration: underline;
padding:0.2rem;
}

.home_label{
cursor:pointer;
height:24px;
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
input[type="submit"]:disabled{
color:grey;
cursor:not-allowed;
}
input[type="submit"]:disabled:hover{
box-shadow:none;
color:grey;
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

.feat{
text-align:left;
}

hr{
border:none;
border-top:<?=$text_color?> solid 1px;
margin:1rem 0.5rem;
}

.foot{
text-align:right;
}

p{
font-family:Avantgarde,sans-serif;
}

.alert{
text-align:left;
color:rgb(255,255,255);
}

.form_url{
display:flex;
flex-direction:column;
gap:1rem;
}

@media screen and (min-width: 750px) {
.form_url{
display:flex;
flex-direction:row;
gap:1rem;
}
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

.toggle_cont{
position: -webkit-sticky;
position: sticky;
bottom:1rem;
}

.timer_cont{
margin-left:auto;
background:rgba(0, 0, 0, 0.8);
backdrop-filter: blur(3px);
width:70vw;
border-radius:0.5rem;
padding:1rem 2rem 1rem 2rem;
transition: all 0.5s;
}

input[type="number"]{
width:3rem;
color:<?=$text_color?>;
}

.toggle_cont2{
position:absolute;
top:1rem;
right:1rem;
}

.playlist_cont{
background:rgba(0, 0, 0, 0.8);
backdrop-filter: blur(3px);
width:30vw;
border-radius:0.5rem;
padding:1rem 2rem 1rem 2rem;
transition: all 0.5s;
}

.playlist_el{
display:flex;
justify-content:end;
}

.playlist_el_sub{
background:rgba(0,0,0,0) !important;
}

.del_btn{
text-align:center;
}

.toggle_label{
position:absolute;
z-index:1;
right:0.2rem;
border-radius: 1rem;
background:rgba(0, 0, 0, 1);
display:flex;
padding: 0.7rem;
border: <?=$text_color?> 2px solid;
cursor:pointer;
}

.toggle{
position:absolute;
z-index:1;
right:0.2rem;
border-radius: 1rem;
height: 3rem;
width: 3rem;
appearance: none;
margin: 1px;
padding: 2px;
}

@media screen and (min-width: 750px) {
.toggle, .toggle_label{
right:1rem;
}
}

.toggle_label:hover, .toggle:hover{
box-shadow:rgba(255, 255, 255, 1) 0 0 0.5rem;
}

.toggle:checked ~ .timer_cont{
transform: translate(95%);
}
.toggle:checked ~ .playlist_cont{
transform: translate(90%);
}

.bold{
font-weight: bold;
color:rgba(255, 255, 255, 1) !important;
}