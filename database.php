<?php

//Connect to Mysql

$con = mysqli_connect("localhost", "root", "root", "shoutit");

//Test Connection

if (mysqli_connect_errno()){
    echo 'Failed to connect to MySql'.mysqli_connect_error();
} else {
    echo 'Connected successfuly!!';
}