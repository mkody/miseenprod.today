<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8" />
	<title>Mise en prod, today ?</title>

</head>
<body>
<?php
/*
TODO: 	Timezone du client,
		ajouter le random de gifs selon les états,
		ajouter les images tout-court
		c'pas beau, rendre le truc plus joli
*/

$day = date("N");
$time = date("H:i");

if($day == 1) {
	$message = "#LigueContreLeLundi";
} elseif($day == 5) {
	$message = "Vendredi ? LOLNOPE.";
} elseif($time >= "11:45" && $time < "13:00") {
	$message = "Ah bah non, 'faut aller manger maintenant !";
} elseif($time >= "17:30" && $time < "23:00") {
	$message = "Boarf, trop tard maintenant...";
} elseif($time >= "23:00" && $time < "05:00") {
	$message = "Et pourquoi pas aller dormir, vu l'heure ?";
} else {
	$message = "Hmm, ça semble safe...";
}

?>
	<h1>Mise en prod, today ?</h1>
	<p><?php echo $message; ?></p>
	<small><i>Amélioration du site dans quelques temps, mais pas avant mardi hein.</i></small>

</body>
</html>
