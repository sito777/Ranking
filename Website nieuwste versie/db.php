<?php

DEFINE('DB_USER', 'RankAdmin');
DEFINE ('DB_PASSWORD','Ranking2020');
DEFINE ('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'Ranking');

$dbc = @mysqli_connect(DB_HOST, DB_USER,DB_PASSWORD,DB_NAME)
OR die('Could not connect to MySQL' .
    mysqli_connect_error());


?>