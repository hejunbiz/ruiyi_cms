<?php
class FootprintsController extends Controller{
	public function actionIndex(){
		//获取用户ip
		$ip = Utils::getClientIP();
		Utils::getRealLocationByIp();
		exit;
		$data = array();
		$this->render('index',$data);
	}
}
?>