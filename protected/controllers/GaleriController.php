<?php

class GaleriController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public $layout='front_page_full';
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
				),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
				),
			);
	}


	public function actionFoto()
	{
		$dataProvider=new CActiveDataProvider('Portfolio');
		$this->render('index_foto',array(
			'dataProvider'=>$dataProvider,
			));
	}		

	public function actionVideo()
	{
		$dataProvider=new CActiveDataProvider('Stream');
		$this->render('index_video',array(
			'dataProvider'=>$dataProvider,
			));
	}

	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			));
	}

	public function loadModel($id)
	{
		$model=Portfolio::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}



}