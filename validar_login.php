<?php

session_start();
if(!isset ($_SESSION['autenticado']) || $_SESSION['autenticado']){
  header('location: index.php?login=erro2'); 
}


$logUser_valido = false;

$usuario_app = array(
	
	array('email' => 'adm@teste.com.br', 'senha' => '123456'),
	array('email' => 'usuario@teste.com.br', 'senha' => '147852'),
	array('email' => 'user@teste.com.br', 'senha' => '741963'),
	array('email' => 'marcelomaynarte@teste.com', 'senha' => 'maynarte'),

);
foreach ($usuario_app as $user ) {
	if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
		$logUser_valido = true;
	}
}

	if($logUser_valido){
		
		header('location: http://localhost/Help-Desc/home.php');
	}else{
		header('location: http://localhost/Help-Desc/index.php?Login=erro');
	}

?>