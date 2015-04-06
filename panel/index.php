<?php

require ('steamauth/steamauth.php');

$mysql_server = "localhost";
$mysql_user = "turboformula";
$mysql_password = "ru4yta7yr";
$mysql_database = "zadmin_turboformula";

$conn = mysql_connect("$mysql_server","$mysql_user","$mysql_password") or die ("Unable to establish a DB connection");

$db = mysql_select_db("$mysql_database") or die ("Unable to establish a DB connection");

if(!isset($_SESSION['steamid'])) {
    echo "<div style='margin: 30px auto; text-align: center;'>Welcome Guest! Please log in!";
    steamlogin();
	echo "</div>";
	}  else {
    include ('steamauth/userInfo.php');
    $steamid = $steamprofile['steamid'];
	$personaname = $steamprofile['personaname'];
	$lastlogoff = $steamprofile['lastlogoff'];
	$profileurl = $steamprofile['profileurl'];
	$status = $steamprofile['personastate'];
	$realname = $steamprofile['realname'];
	$clan = $steamprofile['primaryclanid'];
	$avatar = $steamprofile['avatarmedium'];

	$linkSteam = mysql_query("UPDATE truckers SET name='$personaname', last_login=current_timestamp WHERE steamID64='$steamid'", $conn);
	$sql = "SELECT * FROM truckers WHERE steamID64='$steamid'";
	$query = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_object($query);
	$rank = htmlspecialchars($row->rank);
	$turbotrackID = htmlspecialchars($row->turbotrackID);

	include("index.inc.php");
	}    

?>