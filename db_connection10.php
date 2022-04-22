<?php


$mysqli = mysqli_connect('localhost', 'root', 'DesTiny20001984', 'destinydb');

/* Set the desired charset after establishing a connection */
mysqli_set_charset($mysqli, 'utf8mb4');



/*$result = mysqli_query($mysqli, "SELECT AVG(Player.PlayerKD) FROM Player, Clan WHERE Clan.ClanName = 
'Fridgeburger' && Player.ClanName = Clan.ClanName");
	echo nl2br("\n");
while($row = mysqli_fetch_array($result)) {
	echo nl2br("Fridgeburger KD: ");
	echo $row['AVG(Player.PlayerKD)'];
	echo nl2br("\n");
}*/

?> 

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get input field value
    $field = htmlspecialchars($_REQUEST['fage']);
	$field2 = htmlspecialchars($_REQUEST['fage2']);
    
    // If input field is empty
    if (empty($field)) {
    
        // Display message "Field is empty"
        echo "Field is empty";
        
    // Else if input field is not empty
    } else {
    
    	
	   $result = mysqli_query($mysqli, "UPDATE player SET PlayerName = '$field'
WHERE
 PlayerName = '$field2' ");
 
	   if ($result) { 
		echo "Update Successful"; 
	} else { 
	echo "Update Failed:". mysql_error(); 
	} 
}
    }
include 'db_connection_alternate.html';
?> 

