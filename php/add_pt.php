<?php
require_once 'db.php';
require_once 'pt.php';

$add = add_pt($_POST['title'],$_POST['category'],$_POST['ptname'],$_POST['specialty'],$_POST['intro'],$_POST['content'],$_POST['price'],$_POST['image_path'],$_POST['publish']);

if($add)
{
	echo 'yes';
}
else
{
	echo 'no';
}

?>