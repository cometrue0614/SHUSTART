<?php
require_once 'db.php';
require_once 'functions.php';

$add = add_user($_POST['un'],$_POST['pw'],$_POST['last'],$_POST['first'],$_POST['id'],$_POST['sub'],$_POST['bir'],$_POST['email'],$_POST['phone']);

if($add)
{
	echo 'yes';
}
else
{
	echo 'no';
}

?>