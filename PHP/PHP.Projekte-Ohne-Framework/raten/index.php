<?php include 'database.php'; ?>
<?php
/*
 *	Get Total Questions
 */
 $sql ="SELECT * FROM fragen";
 $response = $bdd->query($sql);

 $questions = $response->fetchAll(); 

 // Anzahl von Fragen
 $total_question = count($questions);
 
?>
<?php require_once 'inc/header.php'; ?>
	<main>
		<div class="container">
			<h2>Test deine PHP Kenntnisse</h2>
			<p>Hier is eine Mehrauswahl quizz um PHP Kenntnisse zu testen</p>
			<ul>
				<li>
					<strong>Number of Questions: </strong>
					<?php echo $total_question; ?>
				</li>
				<li><strong>Type: </strong>Multiple Choice</li>
				<li>
					<strong>Gesamte Zeit: </strong>
					<?php echo ($total_question * (0.5)); ?> Minuten
				</li>
			</ul>
			<a href="question.php?n=1" class="start">Start Quiz</a>
		</div>
	</main>
	<?php require_once 'inc/footer.php'; ?>