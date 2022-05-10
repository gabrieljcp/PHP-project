<h1>Listar Atendente</h1>
<?php
	$sql = "SELECT * FROM atendente";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

	if($qtd > 0){
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome do Atendente</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_atendente."</td>";
			print "<td>".$row->nome_atendente."</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'><p>Não encontrou resultado</p></div>";
	}
?>