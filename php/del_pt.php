<?php
require_once 'db.php';
require_once 'pt.php';

$del = del_pt($_POST['id']);

if($del)
{
	echo 'yes';
}
else
{
	echo 'no';	
}

?>