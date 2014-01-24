<?php
class FootprintsController extends Controller{
	public function actionIndex(){
		//获取用户ip
		//$ip = Utils::getClientIP();
		Utils::getRemoteSystemInfo();
		$data = array();
		$this->render('index',$data);
	}
}
?>