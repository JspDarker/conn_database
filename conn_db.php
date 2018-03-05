<?php
$mysqli = new mysqli("localhost","root","zxcv","music");

if($mysqli == false){
    die("Error, can't connect to database");
} else{
    echo "Connect OKE to ";
}
