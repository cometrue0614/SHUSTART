<?php
require_once 'db.php';
require_once 'article.php';

$add = add_article($_POST['title'],$_POST['category'],$_POST['field'],$_POST['content'],$_POST['image_path'],$_POST['video_path'],$_POST['publish']);

if($add)
{
	echo 'yes';
}
else
{
	echo 'no';
}

?>