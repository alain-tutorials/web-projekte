<?php 
	include 'database.php'; 
	 
?>
<?php session_start(); ?>
<?php
	//Check to see if score is set_error_handler
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}
	
	if($_POST){
		$number = $_POST['number'];
		$selected_choice = $_POST['choice'];
		$next = $number+1;
		
		/*
		*	Get total questions
		*/
		$sql_fragen = "SELECT * FROM fragen";
		//Get result
		$response_questions = $bdd->query($sql_fragen);

		$question_all = $response_questions->fetchAll();
		$anzahl_question = count($question_all);
		
		
		/*	Get correct choice */
		$sql_01 = "SELECT * FROM auswahl WHERE ";
		$sql_02 = " frage_nummer = $number AND is_richtig = 1";
		$sql_richtig = $sql_01 . $sql_02;
					
		//Get result
		$response_richtig = $bdd->query($sql_richtig);
		
		//Get row
		$row = $response_richtig->fetch();
		
		//Set correct choice
		$correct_choice = $row['id'];
		
		//Compare
		if($correct_choice == $selected_choice){
			//Answer is correct
			$_SESSION['score']++;
		}

		//Check if last question
		if($number == $anzahl_question){
			header("Location: final.php");
			exit();
		} else {
			header("Location: question.php?n=".$next);
		}
	}