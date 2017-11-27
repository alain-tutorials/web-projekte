<?php session_start(); ?>
<?php require_once 'inc/header.php'; ?>
	<main>
		<div class="container">
			<h2>You're Done!</h2>
				<p>Gratulieren! Du hast alle Fragen geantwortet</p>
				<p>Ende Ergebnis: <?php echo $_SESSION['score']; ?></p>
				<a href="question.php?n=1" class="start">Noch mal versuchen</a>
		</div>
	</main>
	<?php require_once 'inc/footer.php'; ?>
<?php session_destroy(); ?>