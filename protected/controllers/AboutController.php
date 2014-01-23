<?php
class AboutController extends Controller{
	public function actionIndex(){
		$array = array(
			'userName' => 'HeJun',
		);
		$data['about'] = $array;
		$this->render('index',$data);
	}
}
?>