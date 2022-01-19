<?php

$conn = mysqli_connect("localhost", "root", "", "Agrocast");

if (!$conn) {
    echo "Connection Failed";
}