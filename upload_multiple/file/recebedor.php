<?php
if (isset($_FILES['arquivo'])) {

	if (count($_FILES['arquivo']['tmp_name']) > 0 ) {
		for ($q=0;$q<count($_FILES['arquivo']['tmp_name']);$q++) {
			$nomedoarquivo = md5($_FILES['arquivo']['tmp_name'][$q].time().rand(0,999)).'.jpg';
			move_uploaded_file($_FILES['arquivo']['tmp_name'][$q], 'itens/'.$nomedoarquivo);
		}
	}
	echo "Enviado com sucesso!";
}
?>
<br>
<a href="index.php">Voltar</a>
