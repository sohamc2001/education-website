<?php

//$con = mysqli_connect("localhost","userid","password","DatabaseName");

$con = mysqli_connect("localhost","suvajit_digix","suvajit_digix","suvajit_digix");

if (mysqli_connect_errno())
echo "Failed to connect MySQL : " . mysqli_connect_error();

//else echo "Database Connected";