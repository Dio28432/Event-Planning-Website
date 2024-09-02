<?php

function getConnection()
{
	$servername="localhost";
    $username="root";
    $pass="";
    $dbname="projectrecipes";
    $conn= new mysqli($servername,$username,$pass,$dbname);
    return $conn;
}
?>