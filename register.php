<?php

include 'dbh.php'

$name = $_POST['name'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$email = $_POST['email'];

echo $name."<br>";
echo $uid."<br>";
echo $pwd."<br>";
echo $email."<br>";
