<?php 

	if (isset($_GET['categoria']) and $_GET['categoria'] == 1) {
		echo "Esportes";
	}
	elseif (isset($_GET['categoria']) and $_GET['categoria'] == 2) {
		echo "Eletronicos";
	}
	elseif (isset($_GET['categoria']) and $_GET['categoria'] == 3) {
		echo "Roupas";
	}
	elseif (isset($_GET['categoria']) and $_GET['categoria'] == 4) {
		echo "Outros";
	}
	

	if (isset($_POST['busca'])) {
		$texto2 = $_POST['busca'];
		echo "Não foi encontrado nenhum produto com o termo $texto2";
	}