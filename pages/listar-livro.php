<h1>Listar Livro</h1>
<?php
	$sql = "SELECT * FROM livro AS li
			INNER JOIN categoria AS ca
			ON li.categoria_id_categoria = ca.id_categoria";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

	if($qtd > 0){
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Categoria</th>";
		print "<th>Título</th>";
		print "<th>Autor</th>";
		print "<th>Editora</th>";
		print "<th>Edição</th>";
		print "<th>Ano</th>";
		print "<th>Localidade</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_livro."</td>";
			print "<td>".$row->nome_categoria."</td>";
			print "<td>".$row->titulo_livro."</td>";
			print "<td>".$row->autor_livro."</td>";
			print "<td>".$row->editora_livro."</td>";
			print "<td>".$row->edicao_livro."</td>";
			print "<td>".$row->ano_livro."</td>";
			print "<td>".$row->localidade_livro."</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Não há livros cadastrados.</div>";
	}
?>