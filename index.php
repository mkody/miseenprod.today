<?php
	/*
	TODO
	- Timezone du client
	- Icone de github
	- Random message ?
	- Récupérer la date/heure du client
	*/

	$day = date("N");
	$time = date("H:i");
	$message = "Hmm, ça semble safe...";
	$directory = "prod";

	/**
	 * Mise en prod ou pas alors ?
	 */
	if($day == 1) {
		$message = "#LigueContreLeLundi";
		$directory = "lundi";
	} elseif($day == 5) {
		$message = "Vendredi ? LOLNOPE.";
		$directory = "vendredi";
	} elseif($time >= "9:45" && $time < "11:00") {
		$message = "Ah bah non, 'faut aller manger maintenant !";
		$directory = "midi";
	} elseif($time >= "15:30" && $time < "21:00") {
		$message = "Boarf, trop tard maintenant...";
		$directory = "soir";
	} elseif($time >= "21:00" && $time < "3:00") {
		$message = "Et pourquoi pas aller dormir, vu l'heure ?";
		$directory = "dormir";
	}

	/**
	 * Allons chercher un gif pour fêter ça
	 */
	$file = "";
	try {
		$scan = scandir("images/" . $directory);
		if ($scan === FALSE) throw new Exception();

		$files = array();
		foreach($scan as $item) {
			if ($item !== NULL && $item !== "" &&
				strpos($item, ".gif", strlen($item) - 4) !== FALSE) {
				$files[] = $item;
			}
		}

		$rand = rand(0, count($files) - 1);
		$file = "images/" . $directory . "/" . $files[$rand];
	} catch (Exception $e) {
		// Si ça plante, retourner quelque chose au moins
		$file = "images/soir/octopus.gif";
		echo "<!-- PHP ERROR: " . $e . " -->";
	}
	
	/**
	 * Rendu HTML
	 */
	$html_title = "Mise en prod, today ?";
	$html_headline = "Mise en prod, today ?";
	$html_message = $message;
	$html_notice = "";
	$html_gif = $file;

	include_once("view.php");
