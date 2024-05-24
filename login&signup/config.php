<?php

$conn = mysqli_connect("localhost", "root", "", "tumcha_neta");

if (!$conn) {
    echo "Connection Failed";
}