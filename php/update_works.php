<?php
require_once 'db.php';
require_once 'works.php';

$update = update_works($_POST['id'],$_POST['title'],$_POST['intro'],$_POST['content'],$_POST['subject'],$_POST['category'],$_POST['video_path'],$_POST['publish']);

if($update)
{
	echo 'yes';
}
else
{
	echo 'no';	
}

?>