<?php

if(isset($arquivo['tmp_name'])&& empty($arquivo['tmp_name']) == false){
$arquivo = $_FILES['arquivo'];
    move_uploaded_file($arquivo['tmp_name'], 'arquivo/'.$arquivo['name']);
echo 'Arquivo enviado com sucesso!';
}
 ?>
