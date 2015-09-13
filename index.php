<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
@include('model/Contact.class.php');

$contact = new Contact;

if(isset($_GET['request'])){
	$request = $_GET['request'];
}
else{
	$request = '';
}
if($request == 'create'){
	@include('view/form.php');	
}
elseif($request == 'save'){
	$contact->setFirstName($_POST['first_name']);
	$contact->setSecondName($_POST['second_name']);
	$contact->setCity($_POST['city']);
	if($contact->isValid()){
		$contact->save();
		header('Location:/?mensage=Usuário cadastrado com sucesso!');
	}
	else{
		echo "Inválido!";
	}

}
elseif($request == 'edit'){
	$contact = $contact->find($_GET['id']);
	@include('view/edit.php');
}
elseif($request == 'update'){
	$contact->setFirstName($_POST['first_name']);
	$contact->setSecondName($_POST['second_name']);
	$contact->setCity($_POST['city']);
	if($contact->isValid()){
		$contact->update($_POST['id']);
		header('Location:/?mensage=Usuário cadastrado com sucesso!');
	}
}
elseif($request == 'destroy'){
	$contact = $contact->destroy($_GET['id']);
}
else{	
	if(isset($_GET['name']) && $_GET['name']){
		$result = $contact->all($_GET['name']);
	}
	$result = $contact->all();
	@include('view/list.php');
}
