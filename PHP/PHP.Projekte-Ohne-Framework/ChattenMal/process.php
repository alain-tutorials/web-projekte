<?php  
	include 'database.php';
	include '../debog/debog.php';
	//check ob the Formular geschickt wurde
	if (isset($_POST['submit'])) {
		echo "<pre>";	print_r($_POST);	echo "<pre>";

		//$bdd->quote() schutzt zeichenketten
		$user = $_POST['user'];
		$message = $_POST['message'];
		date_default_timezone_get("Europe/Berlin");
		$time = date('h:i:s a',time());
		date_default_timezone_get("Europe/Berlin");
		$time = date('h:i:s a',time());

	//validate Input 
		if ((!isset($user)) || ($user == '') || (!isset($message)) || ($message == '') ) {
			$errorMsg = "Bitte Name und Message eingeben";
			header("Location: index.php?error=".urlencode($errorMsg));
		} 
		else {
				$sql_01 = 'INSERT INTO chatten (user, message, time)';
				$sql_02 = ' VALUES ( :user, :message, :time )';
				$sql = $sql_01 . $sql_02;
				echo "<br>$sql<br>";
				$chatten_insert = [
					'user' => $user,
					'message' => $message,
					'time' => $time
				];
				printr($chatten_insert);

				try {
					$reponse = $bdd->prepare($sql);
					$reponse->execute($chatten_insert);
					header('Location: index.php');
					exit();
				} catch (PDOException $e) {
					// falls mysqli_query nicht den insert speicher
					$errorMsg = 'could not insert chatten';
					header("Location: index.php?error=".urlencode($errorMsg));
				}
				
			}
		}
		


	