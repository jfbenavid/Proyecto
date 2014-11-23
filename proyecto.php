<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Automatas Gramaticales</title>
	<script type="text/javascript" src="css/jquery.js"></script>
	<script src="css/cargar.js"></script>
</head>
<body>

	<header>
		<h3>Los integrantes del proyecto son:</h3>
		<h2>Yoes Monterroza
			<br>Jonathan Martelo
			<br>Fabian Benavides
		</h2>
	</header>
	<section class="lol">
		<article class="general">
			<div class="mostrar">
				<?php
					$existe = $_GET['varPrueba'];
					if(file_exists($existe)){
						$gramatica = simplexml_load_file($existe);
						echo "<ul>";
						foreach ($gramatica->GRAMATICA->PRODUCCION as $prod) {
							echo '<li><strong>'.$prod.'</strong></li>';
						}
						echo "</ul>";
					}
					$existe = 'c:/wamp/www/proyecto/archivos/af.xml';
					if(file_exists($existe)){
						$af = simplexml_load_file($existe);
						echo "<ul>";
						echo "<li><strong>".$af->AUTOMATA->INICIAL."</strong></li>";
						echo "<li><strong>".$af->AUTOMATA->FINAL."</strong></li>";
						foreach ($af->AUTOMATA as $prod) {
							echo '<li><strong>'.$prod->TRANSICION.'</strong></li>';
						}
						echo "</ul>";
					}
				?>
			</div>
			<div class="cargar">
				<form enctype="multipart/form-data" action="carga.php" method="post">
					<input type="file" name="archivo">
					<input type="submit" value="Cargar" name="Gramatica">
					<input type="submit" value="Cargar" name="AF">
				</form>
			</div>
			<div class="calculo">

			</div>
		</article>
	</section>
	<footer>
		<h3>
			<strong>Tecnologico Comfenalco</strong>
			<span class="presentacion">
				Cartagena de indias
				<br>
				Colombia 2014
			</span>
		</h3>
	</footer>


	<link rel="stylesheet" href="css/proyecto.css">
</body>

</html>