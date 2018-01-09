<?php

$host = "localhost";

$database = "cricket_match";

$user = "root";

$password = "tucker12";


@ $db = mysqli_connect($host, $user, $password, $database);

$db->select_db($database);


if (mysqli_connect_errno())
{
echo 'Error connecting to the db.';
exit;
}


?>
