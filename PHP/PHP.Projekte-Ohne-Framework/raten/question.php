<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
	//Set question number
	$number = (int) $_GET['n'];
	
	/*	Get total questions	*/
	$sql_questions = "SELECT * FROM fragen";
	
	$response_questions = $bdd->query($sql_questions);

	$question_all = $response_questions->fetchAll();
	$anzahl_question = count($question_all);
		
	/*	heraus holen von frage Nr: $number */
	$sql_number = "SELECT * FROM fragen WHERE frage_nummer = $number";
	
	$response_number = $bdd->query($sql_number);
	$frage = $response_number->fetch();

	
	/* herausholen von Auswahl */
	$sql_choices = "SELECT * FROM auswahl WHERE frage_nummer = $number";

	//Get results
	$response_choices = $bdd->query($sql_choices);
	
?>
<?php require_once 'inc/header.php'; ?>
	<main>
		<div class="container">
			<div class="current">
				Question <?php echo $frage['frage_nummer']; ?>
				 of <?php echo $anzahl_question; ?></div>
			<p class="question">
				<?php echo $frage['frage']; ?>
			</p>
			<form method="post" action="process.php">
				<ul class="choices">
					<?php while($row = $response_choices->fetch()): ?>
						<li>
							<input name="choice" type="radio" 
								value="<?php echo $row['frage_nummer']; ?>" />
								<?php echo $row['text']; ?>
						</li>
					<?php endwhile; ?>
				</ul>
				<input type="submit" value="Submit" />
				<input type="hidden" name="number" value="<?php echo $number; ?>" />
			</form>
		</div>
	</main>
	<?php require_once 'inc/footer.php'; ?>