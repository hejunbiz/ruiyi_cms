<?php
class AboutController extends Controller{
	//关于首页
	public function actionIndex(){
		$data = array();
		$data['head'] = $this->head();
		$data['title'] = '关于我';
		$this->render('index',$data);
	}
}
?>