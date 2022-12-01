<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$nome 	   = $_POST["nome_usuario"];
			$email     = $_POST["email_usuario"];
			$telefone  = $_POST["telefone_usuario"];
			$data_nasc = $_POST["data_nasc_usuario"];
			$cpf 	   = $_POST["cpf_usuario"];

			$sql = "INSERT INTO usuario (nome_usuario, email_usuario, telefone_usuario, data_nasc_usuario, cpf_usuario) VALUES ('{$nome}','{$email}','{$telefone}','{$data_nasc}','{$cpf}')";

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=listar-usuario';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=listar-usuario';</script>";
			}
			break;
		
		case 'editar':
			// code...
			break;

		case 'excluir':
			// code...
			break;
	}