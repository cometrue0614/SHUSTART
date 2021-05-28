<?php

@session_start();
$host = 'localhost';
$dbuser = 'vhost106274';
$dbpw = 'shu79169';
$dbname = 'vhost106274-1';

$_SESSION['link'] = mysqli_connect($host, $dbuser, $dbpw, $dbname);

if ($_SESSION['link'])
{
  mysqli_query($_SESSION['link'], "SET NAMES utf8");
}
else
{
  echo '無法連線mysql資料庫 :<br/>' . mysqli_connect_error();
}
?>