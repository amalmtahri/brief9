<?php

class DB{
	 public function connect(){
		try{
		$db = new PDO("mysql:host=localhost;dbname=wordpress2","root","");
		return $db;
	}
	catch(Exception $e){
		die("Erreur de connection".$e->getMessage());
	}
	}
}
?>