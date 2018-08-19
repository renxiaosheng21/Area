<?php
$Host = '127.0.0.1';
$User = 'root';
$Pwd = '199503';
$Dbname = 'area';

$mysqli=new mysqli($Host,$User,$Pwd,$Dbname);
mysqli_set_charset($mysqli,'utf-8');
mysql_query("set names 'utf8'");
if($mysqli->connect_errno){
    die('数据库链接出错'.$mysqli->connect_error);
}