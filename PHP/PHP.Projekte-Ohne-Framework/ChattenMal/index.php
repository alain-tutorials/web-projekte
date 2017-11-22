<?php include 'database.php'; ?>
<?php 
	$sql = 'select * FROM chatten ORDER BY id DESC';
	$reponse = $bdd->query($sql);
 ?>

<!DOCTYPE html>
<html>
<head>
		<!--  Anzeige ist falsch mit UTF-8
			<meta charset="utf-8"> 
		-->
		<meta charset="utf-8"> 
	  <?php // header('Content-Type: text/html; charset=iso-8859-1'); ?>
	<title>Schau mal</title>
	<link rel="stylesheet" href="CSS/style.css">
</head>
<body>
	<div id="container">
		<header><h1>Schau mal! mein chatt !</h1></header>
		<div id="shouts">
			<ul>
				<?php while ($chatten = $reponse->fetch()): ?>
					<li class="shout">
						<span><?php echo $chatten['time']; ?></span> - 
						<strong><?php echo $chatten['user']; ?></strong> :
						<?php echo $chatten['message']; ?>
						 <br>
					</li>
				<?php endwhile; ?>
			</ul>
		</div>
		<div id="input">
			<?php if(isset($_GET['error'])) : ?>
				<div class="error"><?php echo $_GET['error']; ?></div>
			<?php endif; ?>
			<form method="POST" action="process.php">
				<input type="text" name="user" placeholder="Gib deinen Name ein">
				<input type="text" name="message" placeholder="Gib eine Nachricht ein">
				<br>
				<input type="submit" name="submit" class="shout-btn" value="Zeig es Raus"/>
			</form>
		</div>
	</div>

</body>
</html>
<?php //include 'process.php'; ?>