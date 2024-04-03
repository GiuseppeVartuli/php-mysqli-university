
<?php
define('DB_SERVERNAME', 'localhost:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', '1_pt_university');

$connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($connection && $connection->connect_error) {
    echo "Connection failed: " . $connection->connect_error;
    die;
  }


  $query = "SELECT * FROM `students` WHERE `date_of_birth` LIKE '1990%';";
  $results = $connection->query($query);
  var_dump($results);

?>















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>ciao a tutti</div>
</body>
</html>