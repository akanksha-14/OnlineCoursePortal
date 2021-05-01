<?php

$dbhost = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($dbhost,$username,$password);
$sql = "CREATE DATABASE IF NOT EXISTS online_course_portal;";
mysqli_query($conn,$sql);
mysqli_close($conn);

$dbname = "online_course_portal";
$conn = mysqli_connect($dbhost,$username,$password,$dbname);
$sql = "CREATE TABLE `user` (
        `name` varchar(50) NOT NULL,
        `email` varchar(50) NOT NULL,
        `contact` int(10) NOT NULL,
        `course` varchar(30) NOT NULL
        );";
mysqli_query($conn,$sql);
$sql = "ALTER TABLE `user`
        ADD PRIMARY KEY (`email`),
        ADD UNIQUE KEY `contact` (`contact`);";
mysqli_query($conn,$sql);

?>