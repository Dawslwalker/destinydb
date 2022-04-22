<?php

 
/* You should enable error reporting for mysqli before attempting to make a connection */
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$mysqli = mysqli_connect('localhost', 'root', 'DesTiny20001984', 'destinydb');

/* Set the desired charset after establishing a connection */
mysqli_set_charset($mysqli, 'utf8mb4');

printf("Success... %s\n", mysqli_get_host_info($mysqli));
printf("Server version: %s\n", mysqli_get_server_info($mysqli));

/*$result = mysqli_query($mysqli, "SELECT PlayerName FROM player LIMIT 10");
	echo nl2br("\n");
while($row = mysqli_fetch_array($result)) {
	echo $row['PlayerName'];
	echo nl2br("\n");
}*/

?>