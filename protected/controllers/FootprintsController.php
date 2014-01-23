<?php
class FootprintsController extends Controller{
	public function actionIndex(){
		//获取用户ip
		//$ip = Utils::getClientIP();
		Utils::getRemoteSystemInfo();
		exit;
		$data = array();
		$this->render('index',$data);
	}
}
?>