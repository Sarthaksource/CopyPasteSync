<?php
#Connect with database

$HOSTNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "copy_paste";

$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

if(!$con)
{
    die(mysqli_error($con));
}

?>