<?php
require_once 'db.php';
require_once 'works.php';

$add = add_works($_POST['title'],$_POST['intro'],$_POST['content'],$_POST['subject'],$_POST['category'],$_POST['video_path'],$_POST['publish']);

if($add)
{
	echo 'yes';
}
else
{
	echo 'no';
}

?>