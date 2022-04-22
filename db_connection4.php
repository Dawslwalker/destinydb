<?php


$mysqli = mysqli_connect('localhost', 'root', 'DesTiny20001984', 'destinydb');

/* Set the desired charset after establishing a connection */
mysqli_set_charset($mysqli, 'utf8mb4');


/*$sql = "CREATE TABLE mytable (

player_PlayerName VARCHAR(30) NOT NULL,
clan_ClanName VARCHAR(30) NOT NULL

)";
*/

$result = mysqli_query($mysqli, "SELECT
  player.PlayerName AS player_PlayerName,
  clan.ClanName AS clan_ClanName
FROM player
JOIN clan ON player.ClanName=clan.ClanName");
	echo nl2br("\n");
while($row = mysqli_fetch_array($result)) {
	echo nl2br("Fridgeburger KD: ");
	echo $row['SHOW TABLE'];
	echo nl2br("\n");
}
include 'db_connection_alternate.html';

?>