<?php
/**
 * 系统控制器基类，所有控制器都继承该类
 * @Author		HeJun(hejun@hejun.biz)
 * @Link		www.hejun.biz
 * @License		http://www.hejun.biz/license
 * @Version		v1.0
 */
class Controller extends CController{
	public $breadcrumbs=array();
	//定义系统版本
	public $version = "v1.0";
	//获取头部
	public function head(){
		return array(
			'title' => '锐意翱翔',
			'description' => '锐意翱翔,为梦想疯狂!',
			'robots' => 'index, follow',
			'author' => 'HeJun',
			'keywords' => 'hejun,何军,锐意翱翔,www.hejun.biz,hejunbiz',
			'viewport' => 'width=device-width, initial-scale=1, maximum-scale=1',
			'alternate' => array(
				'href' => 'http://www.hejun.biz/feed',
				'title' => 'www.hejun.biz',
			),
			'contentLanguage' => 'zh-CN',
		);
	}
}
?>