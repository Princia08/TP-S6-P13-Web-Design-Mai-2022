<?php 
	require('inc/functions.php');
	$maFiche = rechauffementById($_GET['id']);
	header('Location: fiche.php');
?>