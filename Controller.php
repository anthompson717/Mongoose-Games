<?php
$game_store = new DatabaseAdapter();
if(isset( $_GET ['command])&& $_GET['command'] === "home"){
}
if(isset( $_GET ['user'])&& isset($_GET['pass'])){
	$user = $_GET['user']
	$pass = $_GET['pass']
	$array = $game_store->tryLogin($user,$pass)
	if (count($array) === 0){
		echo json_encode(["No User Found"])
	}
	else{
		echo json_encode(