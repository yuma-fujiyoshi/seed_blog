<?php

// echo 'blogsコントローラーが呼ばれました';
// echo '<br>';

// モデルの呼び出し
require('models/blog.php');

// コントローラのクラスをインスタンス化
$controller=new BlogController();
// $controller->index();
// アクション名によって呼び出すメソッドを変える
switch ($action) {
	case 'index':
		$controller->index();
		break;
	case 'add':
		$controller->add();
		break;
		
	default:
		# code...
		break;
}


class BlogController{
	function index(){
		// echo 'コントローラーのindex()が呼び出されました!<br>';
		// モデルを呼び出す
		$blog=new Blog();
		$viewOptions=$blog->index();
		$action='index';
		// var_dump($viewOptions);
		require('views/layout/application.php');
	}

	function add(){
		// echo 'addが呼び出されました<br>';
	}
}

?>