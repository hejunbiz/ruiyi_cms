<?php
/**
 * 后台首页
 */
class DefaultController extends Controller{
	//首页
	public function actionIndex(){
		$this->render("index");
	}
	//Home
	public function actionHome(){
		$data['serverOs'] = PHP_OS;
		$data['serverSoft'] = $_SERVER['SERVER_SOFTWARE'];
		$data['phpVersion'] = PHP_VERSION;
		$connection = Yii::app()->db;
        $sql = 'SHOW TABLE STATUS LIKE \'' . $connection->tablePrefix . '%\'';
        $command = $connection->createCommand($sql)->queryAll();
		$mysqlVersion = $connection->createCommand("SELECT version() AS version")->queryAll();
		$data['mysqlVersion'] = $mysqlVersion[0]['version'];
		$dbsize = 0;
        foreach ($command as $table) {
            $dbsize += $table['Data_length'] + $table['Index_length'];
		}
        $mysqlVersion = $connection->createCommand("SELECT version() AS version")->queryAll();
		$data['dbsize'] = $dbsize ? Utils::byteFormat($dbsize) : '未知';
		$data['fileupload'] = ini_get('file_uploads') ? ini_get('upload_max_filesize') : '禁止上传';
		$data['serverUri'] = $_SERVER['SERVER_NAME'];
		$data['excuteUseMemory'] = function_exists('memory_get_usage') ? Utils::byteFormat(memory_get_usage()) : '未知';
		$this->render('home', array ('notebook' => $notebook ,'env'=>$env, 'server' => $data ));
	}
}
?>