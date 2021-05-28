<?php
require_once 'db.php';
require_once 'works.php';

$del = del_works($_POST['id']);

if($del)
{
	echo 'yes';
}
else
{
	echo 'no';	
}

?>