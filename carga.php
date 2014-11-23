<?php
	function tipo($ext){
		return explode(".", $ext);
	}

	$prueba = tipo($_FILES['archivo']['name']);

	if($prueba[1]=='xml'){
		$prueba = "Archivos/" +$prueba;
		copy($_FILES['archivo']['tmp_name'],$prueba);
		$alert="Archivo cargado correctamente";
	}
	else
		$alert="ese archivo no sirve pa una mierda .l.";
?>
<script>
	alert(<?= $alert ?>);
	window.location.href="proyecto.php?varPrueba="+<?=$prueba?>+"";
</script>