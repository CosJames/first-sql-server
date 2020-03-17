<?php


class DatabaseHelper {
    protected function connect() {
        # This is variable that is needed to connect to the database
        $dbServerName = "localhost";
        $dbUsername = "root";
        $dbPassword = "may212001";
        $dbName = "Caffeine";
        # Connect to the server
        $conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);
        return $conn;
    }
}
