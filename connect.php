<?php

    // บนserver imsu.co
    $DB_SERVER = 'localhost';
    $DB_USER_READER = 'u13580194';
    $DB_PASS_READER = ')YK/6R|f*<';
    $DB_NAME = 'db13580194';

    // เชื่อมต่อกับฐานข้อมูล
    $conn = new mysqli($DB_SERVER, $DB_USER_READER, $DB_PASS_READER, $DB_NAME);

    // ตรวจสอบว่าเชื่อมต่อสำเร็จหรือไม่
    // if ($conn -> connect_error()) {
    //     die('connection failed'.$conn -> connect_error());
    // }

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    mysqli_set_charset($conn, "utf8");

    
?>