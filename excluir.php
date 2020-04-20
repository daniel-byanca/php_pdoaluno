<?php 
 include 'conexao.php'
 $id = $_GET_['id'];  $diretorio = "imagens/upload/";  $pegaValores = mysqli_query($conexao, "SELECT imagem FROM tabela WHERE id = $id"); 
 $imagem = mysqli_fetch_object($pegaValores);  $imagemQueVaiDeletada = $diretorio . $imagem->imagem;   $deleta = unlink($imagemQueVaiDeletada); 
 if($deleta):    mysqli_query($conexao, "DELETE FROM tabela WHERE id = $id");  endif;     
Seria algo parecido com isso


?>