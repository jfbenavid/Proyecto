<!doctype html>
<html lang="es">
<head> <meta charset="UTF-8">
	<title>Guardar Multiples Archivos</title>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> <!-- Integramos jQuery-->
	<script src="./cargar.js"></script> <!-- Integramos nuestro script que contendra nuestras funciones Javascript-->
	
	<!-- Creamos un estilo para nuestro documento -->
	<style type="text/css">
		body{
			font-size: 16px;
			text-align: center;
			width: 500px;
			margin: 0 auto;
 
		}
		.mensage{
			border:dashed 1px red;
			background-color:#FFC6C7;
			color: #000000;
			padding: 10px;
			text-align: left;
			margin: 10px auto; 
			display: none;//Al cargar el documento el contenido del mensaje debe estar oculto
		}
	</style>
	</head>
	<body>
		<h1>Subir Multiples Archivos Con PHP y Ajax</h1>
		<!-- Formulario para subir los archivos -->
			<div class="mensage"> </div>      
            <table align="center">
                <tr>
                    <td>Archivo</td>
                    <td><input type="file"  multiple="multiple" id="archivos"></td><!-- Este es nuestro campo input File-->
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><button id="enviar">Enviar Imagenes</button></td>
                </tr>    
            </table>
	</body>
</html>