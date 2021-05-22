<?php 
	session_start();
	
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
		$_SESSION['erro'] = "O preenchimento do campo 'nome' é obrigatório.";
		header('location: index.php');
		return;
	}
	
	if(strlen($nome) < 3){
		$_SESSION['erro'] = "O nome deve conter, no mínimo, 3 caracteres.";
		header('location: index.php');
		return;
	}
	
	if(strlen($nome) > 40){
		$_SESSION['erro'] = "O valor do campo nome excedeu o limite máximo de caracteres.";
		header('location: index.php');
		return;
	}
	
	if(!is_numeric($idade)){
		$_SESSION['erro'] = "O campo idade aceita apenas valores numéricos.";
		header('location: index.php');
		return;
	}
	
	if($idade >= 60){
		echo "$nome está inscrito na categoria <strong>$categorias[3]</strong>";
	} else if($idade >= 18){
		echo "$nome está inscrito na categoria <strong>$categorias[2]</strong>";
	} else if($idade >= 13){
		echo "$nome está inscrito na categoria <strong>$categorias[1]</strong>";
	} else {
		echo "$nome está inscrito na categoria <strong>$categorias[0]</strong>";
	}
	
	echo "<br /> <a href='index.php'>Cadastrar novo competidor.</a>";
?>
