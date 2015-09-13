<?php
	@include('view/partials/_head.php');
	echo "<div class='row'>";
	echo "<div class='col-lg-12'>";
	echo "<h1>Lista de contatos</h1>";

	if ($result->num_rows > 0) {

		echo '<table class="table table-hover">';
    while($row = $result->fetch_assoc()) {	
    	echo "<tr id='line-".$row["id"]."'>";
      echo "<td>" . $row["id"] . "</td>";
      echo "<td>" . $row["first_name"] . "</td>";
      echo "<td>" . $row["second_name"] . "</td>";
      echo "<td> <a href='/?request=edit&id=".$row["id"]."'><button class='btn btn-default btn-edit' contact-id='" . $row["id"] . "'>Editar</button></a>";
      echo "<button class='btn btn-danger btn-destroy' contact-id='" . $row["id"] . "'>Excluir</button></td>";
    }
    echo "</th>";
		echo '</table>';

	} else {
	    echo "Nenhum resultado foi cadastrado";
	}

	echo "<a href='/?request=create'><button class='btn btn-default'>Novo usuário</button></a>";

	@include('view/partials/_footer.php');

