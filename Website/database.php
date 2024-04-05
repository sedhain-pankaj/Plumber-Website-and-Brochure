<?php

$db = mysqli_connect("localhost","root","","arjun_clients_db");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>