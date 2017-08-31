<?php

class AplikasiController extends Controller
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

	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			// 'postOnly + delete', // we only allow deletion via POST request
		);
	}

	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('konsultasi','history','bukutamu','kuesioner'),
				'users'=>array('@'),
				),
			array('deny',
				'users'=>array('*'),
				),
			);
	}


	public function actionKonsultasi()
	{
		$model=new Konsultasi;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Konsultasi']))
		{
			$model->attributes=$_POST['Konsultasi'];
			$model->tanggal_konsultasi = date('Y-m-d h:i:s');
			$model->pengguna_id = YII::app()->user->id;
			$model->status=1;
			if($model->save()){
				$this->redirect(array('history'));
			}
		}

		$this->render('konsultasi',array(
			'model'=>$model,
			));
	}		

	public function actionHistory()
	{
		$dataProvider=new CActiveDataProvider('Konsultasi',array('criteria'=>array('condition'=>'pengguna_id='.YII::app()->user->id)));
		$this->render('history',array(
			'dataProvider'=>$dataProvider,
			));
	}	

	public function actionBukuTamu()
	{
		$model=new Bukutamu;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Bukutamu']))
		{
			$model->attributes=$_POST['Bukutamu'];
			$model->TGLPOST = date('Y-m-d h:i:s');
			$model->status = 1;
			$model->IP = Yii::app()->request->getUserHostAddress();
			if($model->save()){
				$this->redirect(array('view','id'=>$model->no_message));
			}
		}

		$this->render('bukutamu',array(
			'model'=>$model,
			));
	}		

	public function actionKuesioner()
	{
		$model=new Kuesioner;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Kuesioner']))
		{
			$model->attributes=$_POST['Kuesioner'];
			$model->tanggal_kuesioner = date('Y-m-d h:i:s');
			$model->user_id = YII::app()->user->id;
			$model->status = 1;
			if($model->save()){
				$this->redirect(array('site/beranda'));
			}
		}

		$this->render('kuesioner',array(
			'model'=>$model,
			));
	}			

}