<?php
	switch($_REQUEST['acao']){
		case "cadastrar":
			$nome = $_POST["nome_atendente"];

			$sql = "INSERT INTO atendente (nome_atendente) VALUES ('{$nome}')";
			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=listar-atendente';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=listar-atendente';</script>";
			}
		break;

		case "editar":

		break;

		case "excluir":

		break;
	}


