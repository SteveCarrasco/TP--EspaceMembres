
<?php
require_once "dbconnect.php";


if (isset($_POST['connexion']) == 'connexion'){

	if(!empty($_POST['login']) AND !empty($_POST['password'])){
		$query = "SELECT * FROM `users` WHERE login = :login AND password = :password;";

		$PDOStatement = $PDOObject->prepare($query);

		$PDOStatement->bindParam(':login', $_POST['login'], PDO::PARAM_STR);
		$PDOStatement->bindParam(':password', $_POST['password'], PDO::PARAM_STR);

		$PDOStatement->execute();

		if ($PDOStatement->rowCount() != 1) {
			echo 'Connexion &eacute;chou&eacute;e !!!';
			exit;
		}

		echo 'Bonjour '.$_POST['login'].' Connexion r&eacute;ussie !!!';
	}


}

?>

