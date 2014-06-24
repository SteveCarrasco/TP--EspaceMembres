<?php
session_start();
$_SESSION['login'] = $_POST['login'];
require_once "dbconnect.php";

if (isset($_POST['inscription']) == 'inscription'){

	

	if(!empty($_POST['login']) AND !empty($_POST['password'])){
		$query1 = "SELECT * FROM `users` WHERE login = :login AND password = :password; ";

		$PDOStatement = $PDOObject->prepare($query1);

		$PDOStatement->bindParam(':login', $_POST['login'], PDO::PARAM_STR);
		$PDOStatement->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
		

		$PDOStatement->execute();
		}// Fin du 2eme if

		if ($PDOStatement->rowCount() == 0) {
			$query2 = "INSERT INTO `users` (`login`,`password`) VALUES (:login, :password);";


			$PDOStatement1 = $PDOObject->prepare($query2);

			$PDOStatement1->bindParam(':login', $_POST['login'], PDO::PARAM_STR);
			$PDOStatement1->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
			

			$PDOStatement1->execute();
			
			echo 'Bonjour '.$_SESSION['login'].' Votre compte à bien &eacute;t&eacute; cr&eacute;&eacute; !';
			
		
	}else{

		echo 'Compte déja existant !';
		exit;
	}// fin du else

}// Fin du 1er if

?>