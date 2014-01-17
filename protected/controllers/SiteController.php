<?php
class SiteController extends Controller{
	public function actionIndex(){
		$data['head'] = $this->head();
		$data['baseHref'] = '/static';
		$this->render('index',$data);
	}
	//错误处理页面
	public function actionError(){
		if($error = Yii::app()->errorHandler->error){
			if(Yii::app()->request->isAjaxRequest){
				echo $error['message'];
			}else {
				$this->render('error',$error);
			}
		}
	}
}
?>