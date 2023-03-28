<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)) // Verifica se a variavel é vazia
{
	echo "O nome não pode ser vazio";
	return;
}
if (strlen($nome) < 3) // strlen = conta o número de caracteres de uma string
{
	echo 'O nome deve conter mais que 3 caracteres';
	return;	
}

if (strlen($nome) > 40) // O nome não pode ser muito extenso
{
	echo "O nome não pode ser muito extenso";
	return;
}

if (!is_numeric($idade)) {  // is_numeric = 
	echo 'Informe um numero para idade';
	return;
}
//var_dump($nome);
//var_dump($idade);

if ($idade >= 6 && $idade <= 12) 
{
	for ($i=0; $i <= count($categorias); $i++) 
	{ 
		if ($categorias[$i] == 'infantil') 
				echo "O nadador ".$nome. " compete na categoria " .$categorias[$i];
	}	
}
elseif ($idade >= 13 && $idade <= 18) 
{
	for ($i=0; $i <= count($categorias); $i++) 
	{ 
		if ($categorias[$i] == 'adolescente') 
			echo "O nadador ".$nome. " compete na categoria adolescente";
	}	
}
else
{
  	for ($i=0; $i <= count($categorias); $i++) 
	{ 
		if ($categorias[$i] == 'adulto') 
			echo "O nadador ".$nome. " compete na categoria adulto";
	}	
}
  
