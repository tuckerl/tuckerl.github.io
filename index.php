<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <<?php

    include 'detail.php';

    $batsman_name = intval($_GET['batsman_name']);
    $sql = "SELECT * FROM batsman WHERE name = '".$q."'";
    $result = mysqli_query($db, $sql)

    echo mysqli_fetch_array($result);
    ?>
  </body>
</html>
