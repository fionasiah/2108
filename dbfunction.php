<?php

function dbconnect() {
    try {
        $conn = new PDO('mysql:host=47.74.132.88;port=3306;dbname=sweg_db', "root", "foobar123!");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
?>
