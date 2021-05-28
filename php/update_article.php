<?php
require_once 'db.php';
require_once 'article.php';

$update = update_article($_POST['id'],$_POST['title'],$_POST['category'],$_POST['field'],$_POST['content'],$_POST['image_path'],$_POST['video_path'],$_POST['publish']);

if($update)
{
	echo 'yes';
}
else
{
	echo 'no';	
}

?>