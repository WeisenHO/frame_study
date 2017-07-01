<?php
class indexControl extends Control{
	function index(){
		include APP_PATH.'/tpl/index.php';
		/*$db = new db("blog");
		$info = array(
			"btitle"=>$_POST['btitle'],
			"content"=>$_POST['content'],
			"status"=>$_POST['status'],
		
		);
		$db->insert($info);*/
	}
}
?>