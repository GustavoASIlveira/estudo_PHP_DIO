<?php 
	$categorias = [];
	$categorias[] = 'Infantil';
	$categorias[] = 'Adolescente';
	$categorias[] = 'Adulto';
	$categorias[] = 'Sênior';
	
	//print_r($categorias);
	
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	
	/*
	var_dump($nome);
	echo '<br />';
	var_dump($idade);
	return 0;
	*/
	if(empty($nome)){
		echo "O preenchimento do campo 'nome' é obrigatório.";
		return;
	}
	
	if(strlen($nome) < 3){
		echo "O nome deve conter, no mínimo, 3 caracteres.";
		return;
	}
	
	if(strlen($nome) > 40){
		echo "O valor do campo nome excedeu o limite máximo de caracteres.";
		return;
	}
	
	if(!is_numeric($idade)){
		echo "O campo idade aceita apenas valores numéricos.";
		return;
	}
	
	if($idade >= 18){
		echo "$nome está inscrito na categoria <strong>$categorias[2]</strong>";
		return;
	} else if($idade >= 13){
		echo "$nome está inscrito na categoria <strong>$categorias[1]</strong>";
		return;
	} else {
		echo "$nome está inscrito na categoria <strong>$categorias[0]</strong>";
		return;
	}
?>
