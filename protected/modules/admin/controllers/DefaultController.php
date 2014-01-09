<?php
/**
 * 后台首页
 */
class DefaultController extends Controller{
	//首页
	public function actionIndex(){
		$this->render("index");
	}
}
?>