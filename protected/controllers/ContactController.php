<?php
class ContactController extends Controller{
	//联系首页
	public function actionIndex(){
		$data = array();
		$data['head'] = $this->head();
		$data['title'] = '联系我';
		$contacts = array();
		$this->render('index',$data);
	}
}
?>