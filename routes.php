<?php
echo 'routes.phpを通りました';
echo '<br>';


// 1.GETパラメータを取得
// explode関数::第二引数の文字列を第一引数の文字列で分解し、配列で返す関数。
// echo $_GET['url'];

$params=explode('/',$_GET['url']);

// var_dump($params);
// 2.パラメータの分解(リソース名、アクション名、オプションを取得)

$resource=$params[0];
$action=$params[1];
$id=0;
if(isset($params[2])){
	$id=$params[2];
}

// 3.コントローの呼び出し
require('controllers/'.$resource.'_controller.php');



?>