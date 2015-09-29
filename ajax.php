<?php
require_once 'Dbconnect.php';
session_start();

    if($_POST['act'] == 'rate'){
    	//search if the user(ip) has already gave a note
    	$ip = $_SERVER["REMOTE_ADDR"];
    	$therate = $_POST['rate'];
        $app_id=$_SESSION['appidsession'];
    	$thepost = $_POST['post_id'];
		$user=$_SESSION['user'];

    	$query = mysql_query("SELECT * FROM wcd_rate  where user_id= '$user'  "); 
    	while($data = mysql_fetch_assoc($query)){
    		$rate_db[] = $data;
    	}

    	if(@count($rate_db) == 0 ){
    		mysql_query("INSERT INTO wcd_rate (id_post, user_id, rate,app_id)VALUES('$thepost', '$user', '$therate','$app_id')");
    	}else{
    		mysql_query("UPDATE wcd_rate SET rate= '$therate' WHERE user_id = '$user'");
    	}
    } 
?>