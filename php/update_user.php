<?php
require_once 'db.php';
require_once 'functions.php';

$update = update_user($_POST['id'], $_POST['un'], $_POST['pw'], $_POST['last'], $_POST['first'], $_POST['sub'], $_POST['email'], $_POST['phone']);

if($update)
{
	echo 'yes';
}
else
{
	echo 'no';	
}

?>