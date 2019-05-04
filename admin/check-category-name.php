<?php 
require_once $hint .'/app/models/Categories.php';

$model = new Category();
$name = $_GET['name'];
$list = $model->getCategoryByName($name);

$result = count($list) > 0 ? false : true ;

echo $result;

if(count($list) > 0){
	echo true;
}else{
	echo false;
}

 ?>