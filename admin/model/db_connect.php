<?php
// DB Credentials
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'organa');

// Try to connect to MySQL database
$connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check Database Connection
if(!$connect){
    die("Error: Database connection failed. " . mysqli_connect_error());
}
echo '<script>alert("DATABASE connection successful!")</script>';