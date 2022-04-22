<?php


$mysqli = mysqli_connect('localhost', 'root', 'DesTiny20001984', 'destinydb');

/* Set the desired charset after establishing a connection */
mysqli_set_charset($mysqli, 'utf8mb4');




$result = mysqli_query($mysqli, "SELECT DISTINCT player.PlayerName, clan.ClanName
FROM player, clan
WHERE player.ClanName = clan.ClanName;");
	/*echo nl2br("\n");
while($row = mysqli_fetch_array($result)) {
	echo ($row);
	print_r($row);
	echo nl2br("\n");
}*/


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    echo "PlayerName: " . $row["PlayerName"]. " - ClanName: " . $row["ClanName"] . "<br>";
}
} else {
    echo "0 results";
}

include 'db_connection_alternate.html';

?>