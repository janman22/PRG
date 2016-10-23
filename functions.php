<?php
function getSite($site){
	switch ($site){
		case home:
			echo "include 'home.php'"; //TODO: home.php
			break;
		case sport:
			echo "include 'Elemente_mit_Wetten.php'";
			break;
		case kurse:
			echo "include 'Elemente_mit_Kursen.php'";
			break;
		case statistik:
			echo "include 'Container_mit_Statistiken.php'";
			break;
		case profil:
			echo "include 'Container_mit_Statistiken.php'";
			break;
		case logout:
			echo "include 'home.php'"; //TODO: home.php
			logout(); //TODO: Funktion logout() schreiben
			break;
		case login:
			echo "include 'Anmeldungen-Registrieren-Einstellungen.php'";
			break;
		case rechtliches:
			echo "include 'Rechtliches.php'";
			getContentRechtliches($_GET['topic']); //TODO getContentRechtliches() schreiben
			break;
	}
}

function getContentRechtliches($topic){ //TODO

}

function logout(){ //TODO

}


?>