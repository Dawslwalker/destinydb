<?php


$mysqli = mysqli_connect('localhost', 'root', 'DesTiny20001984', 'destinydb');

/* Set the desired charset after establishing a connection */
mysqli_set_charset($mysqli, 'utf8mb4');




$result = mysqli_query($mysqli, "SELECT PlayerName FROM player LIMIT 10");
	echo nl2br("\n");
while($row = mysqli_fetch_array($result)) {
	echo $row['PlayerName'];
	echo nl2br("\n");
}

include 'db_connection_alternate.html';
?>