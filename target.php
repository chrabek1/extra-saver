<?php

require_once "vendor/autoload.php";

$db = new \ES\Db();

$action = 'list';

if ( isset($_GET['action']) )
{
	$action = $_GET['action'];
}


if ( $action == 'list') {
	// pokaz cele
	$targets = $db->get_targets();

	print_r($targets);

	echo '<br><a href="target.php?action=add">Dodaj nowy</a><br>';
	echo '<a href="target.php?action=edit">Edytuj</a><br>';
	echo '<a href="target.php?action=delete">Usuń</a><br>';

}

if ( $action == 'add') {

	// przekierowanie
	header('location: target_add.php');

	// dodaj cele
}

if ( $action == 'edit') {
	// edytuj cel
}

if ( $action == 'delete') {
	// usun cel
}



//


