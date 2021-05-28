<?php
require_once 'db.php';
require_once 'article.php';

$del = del_article($_POST['id']);

if($del)
{
	echo 'yes';
}
else
{
	echo 'no';	
}

?>