<?php
include "functions.php"

if(connectToDB() == "success"){
	createDB("userdata");
	createTable("users");
	//TODO: FORM-Validierung (z.B. Felder sind leer)
	//TODO: Verschlüsselung des Passworts
	if($_POST["Passwort"] == $_POST["PasswortCheck"]){
		registerUser($_POST["Benutzername"], $_POST["Passwort"], $_POST["Email"]);
	}
}
?>