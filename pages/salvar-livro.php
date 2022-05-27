<?php
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$id_cat 	= $_POST["categoria_id_categoria"];
			$titulo 	= $_POST["titulo_livro"];
			$autor 		= $_POST["autor_livro"];
			$editora    = $_POST["editora_livro"];
			$edicao 	= $_POST["edicao_livro"];
			$ano 		= $_POST["ano_livro"];
			$localidade = $_POST["localidade_livro"];

			$sql = "INSERT INTO livro (categoria_id_categoria, titulo_livro, autor_livro, editora_livro, edicao_livro, ano_livro, localidade_livro) VALUES ({$id_cat},'{$titulo}', '{$autor}', '{$editora}', '{$edicao}', '{$ano}', '{$localidade}')";

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Cadastrado com sucesso!');</script>";
				print "<script>location.href='?page=listar-livro';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=listar-livro';</script>";
			}
		break;

		case "editar":

		break;

		case "excluir":

		break;
	}