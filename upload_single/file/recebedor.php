<?php


$arquivo = $_FILES['arquivo']; //$variavel = $_FILES['nome_do_campo_html'];

if(isset($arquivo['tmp_name']) && empty($arquivo['tmp_name']) == false){
	move_uploaded_file($arquivo['tmp_name'], 'itens/'.$arquivo['name']);

	echo "Arquivo enviado com sucesso!";
};
 ?>
