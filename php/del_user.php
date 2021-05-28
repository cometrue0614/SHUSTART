<?php
require_once 'db.php';
require_once 'functions.php';

$del = del_user($_POST['id']);

if($del)
{
	echo 'yes';
}
else
{
	echo 'no';	
}

?>