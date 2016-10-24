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


?>