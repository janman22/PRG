<?php
function getSite($site){
	switch ($site){
		case home:
			echo "include 'Gruppen_de/home.php'"; //TODO: home.php
			break;
		case sport:
			echo "include 'Gruppen_de/Elemente_mit_Wetten.php'";
			break;
		case kurse:
			echo "include 'Gruppen_de/Elemente_mit_Kursen.php'";
			break;
		case statistik:
			echo "include 'Gruppen_de/Container_mit_Statistiken.php'";
			break;
		case profil:
			echo "include 'Gruppen_de/Container_mit_Statistiken.php'";
			break;
		case logout:
			echo "include 'Gruppen_de/home.php'"; //TODO: home.php
			logout(); //TODO: Funktion logout() schreiben
			break;
		case login:
			echo "include 'Gruppen_de/Anmeldungen-Registrieren-Einstellungen.php'";
			break;
		case rechtliches:
			echo "include 'Gruppen_de/Rechtliches.php'";
			getContentRechtliches($_GET['topic']); //TODO getContentRechtliches() schreiben
			break;
	}
}

function getContentRechtliches($topic){ //TODO

}

function logout(){ //TODO

}

function connectToDB() {
	$servername = "localhost";	//Nur Beispiele bis Datenbank eingerichtet wurde.
	$username = "username";		//Nur Beispiele bis Datenbank eingerichtet wurde.
	$password = "password";		//Nur Beispiele bis Datenbank eingerichtet wurde.

	// Verbindung herstellen
	$conn = new mysqli($servername, $username, $password);

	// Checken ob erfolgreich Verbindung hergestellt
	if ($conn->connect_error) {
	    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
	    return "error";
	}

	return "success";
}

function closeDB(){
	$conn->close();
}

function createDB($name) {
	$sql = "CREATE DB " . $name;

	if ($conn->query($sql) === TRUE) {
    return "success";
	} else {
	    retun "error: " . $conn->error;
	}
}

function createTable($name){
	$sql = "CREATE TABLE " .$name. " (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	Benutzername VARCHAR(30) NOT NULL,
	Passwort VARCHAR(30) NOT NULL,
	Email VARCHAR(50),
	Reg_Datum TIMESTAMP
	)";
}

function registerUser($Benutzername, $Passwort, $Email){
	$sql = "INSERT INTO users (Benutzername, Passwort, Email)
	VALUES (".$Benutzername. "," .$Passwort."," .$Email.")";

	if ($conn->query($sql) === TRUE) {
	    return "success";
	} else {
	    return "error: " . $sql . "<br>" . $conn->error;
	}
}

?>