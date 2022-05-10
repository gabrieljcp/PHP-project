<h1>Listar Usuário</h1>
<?php
	$sql = "SELECT * FROM usuario";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome</th>";
		print "<th>E-mail</th>";
		print "<th>Telefone</th>";
		print "<th>Data de Nascimento</th>";
		print "<th>CPF</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_usuario."</td>";
			print "<td>".$row->nome_usuario."</td>";
			print "<td>".$row->email_usuario."</td>";
			print "<td>".$row->telefone_usuario."</td>";
			print "<td>".$row->data_nasc_usuario."</td>";
			print "<td>".$row->cpf_usuario."</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'><p>Não encontrou resultado</p></div>";
	}