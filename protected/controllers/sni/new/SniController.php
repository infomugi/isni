<?php

class SniController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			//'postOnly + delete', // we only allow deletion via POST request
			);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('create','update','view','delete','admin','index','changeimage','uploadisi','uploadringkasan','uploadcover','addsni','addpetunjukteknis','addpedomanteknis','downloadisi','downloadringkasan','excel'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->record->level==1',
				),
			array('allow',
				'actions'=>array('detail','list','search','searchsni','searchpedomanteknis','searchpetunjukteknis'),
				'users'=>array('*'),
				),			
			array('deny',
				'users'=>array('*'),
				),
			);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$update=Sni::model()->findByPk($id);
		$update->tanggal_lihat = date('Y-m-d h:i:s');
		$update->views += 1;
		$update->save();

		$this->render('view',array(
			'model'=>$this->loadModel($id),
			));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Sni;
		$model->setScenario('create');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Sni']))
		{
			$model->attributes=$_POST['Sni'];
			$model->user_id = YII::app()->user->id;
			$model->tanggal_buat = date('Y-m-d h:i:s');			
			$model->status = 0;
			$model->views = 0;
			$model->download = 0;
			if($model->save()){
				$this->redirect(array('view','id'=>$model->id_standar));
			}
		}

		$this->render('create',array(
			'model'=>$model,
			));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Sni']))
		{
			$model->attributes=$_POST['Sni'];
			$model->user_id = YII::app()->user->id;
			$model->tanggal_update = date('Y-m-d h:i:s');			
			if($model->save()){
				$this->redirect(array('view','id'=>$model->id_standar));
			}
		}

		$this->render('update',array(
			'model'=>$model,
			));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$model=$this->loadModel($id);
		$isi = Yii::getPathOfAlias('webroot')."/image/sni/isi/";
		$ringkasan = Yii::getPathOfAlias('webroot')."/image/sni/ringkasan/";
		$cover = Yii::getPathOfAlias('webroot')."/image/sni/cover/";
		if(!empty($model->file_isi)){
			unlink($isi.$model->file_isi);
		}	
		if(!empty($model->file_ringkasan)){
			unlink($ringkasan.$model->file_ringkasan);
		}	
		if(!empty($model->image)){
			unlink($cover.$model->image);
		}			
		
		$model->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			Yii::app()->user->setFlash('danger', '<b>Successfully!</b> Your post has remove.');
		$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Sni');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Sni('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Sni']))
			$model->attributes=$_GET['Sni'];

		$this->render('admin',array(
			'model'=>$model,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Sni the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Sni::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Sni $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='sni-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionUploadIsi($id)
	{
		$model=$this->loadModel($id);
		$model->setScenario('uploadisi');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Sni']))
		{
			$model->attributes=$_POST['Sni'];
			$model->tanggal_update = date('Y-m-d h:i:s');
			$model->user_id = YII::app()->user->id;
			$model->status_isi = 1;

			if(strlen(trim(CUploadedFile::getInstance($model,'file_isi'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'file_isi'); 
				$model->file_isi=Post::model()->seo($model->no_nspm).'.'.$tmp->extensionName; 
			}	

			if($model->save()){
				if(strlen(trim($model->file_isi)) > 0) {
					$tmp->saveAs(Yii::getPathOfAlias('webroot').'/image/sni/isi/'.$model->file_isi);
				}					
				$this->redirect(array('view','id'=>$model->id_standar));
			}
		}

		$this->render('update_isi',array(
			'model'=>$model,
			));
	}	

	public function actionUploadRingkasan($id)
	{
		$model=$this->loadModel($id);
		$model->setScenario('uploadringkasan');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Sni']))
		{
			$model->attributes=$_POST['Sni'];
			$model->tanggal_update = date('Y-m-d h:i:s');
			$model->user_id = YII::app()->user->id;
			$model->status_ringkasan = 1;

			if(strlen(trim(CUploadedFile::getInstance($model,'file_ringkasan'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'file_ringkasan'); 
				$model->file_ringkasan=Post::model()->seo($model->no_nspm).'.'.$tmp->extensionName; 
			}	

			if($model->save()){
				if(strlen(trim($model->file_ringkasan)) > 0) {
					$tmp->saveAs(Yii::getPathOfAlias('webroot').'/image/sni/ringkasan/'.$model->file_ringkasan);
				}					
				$this->redirect(array('view','id'=>$model->id_standar));
			}
		}

		$this->render('update_ringkasan',array(
			'model'=>$model,
			));
	}	

	public function actionUploadCover($id)
	{
		$model=$this->loadModel($id);
		$model->setScenario('uploadcover');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Sni']))
		{
			$model->attributes=$_POST['Sni'];
			$model->tanggal_update = date('Y-m-d h:i:s');

			if(strlen(trim(CUploadedFile::getInstance($model,'image'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'image'); 
				$model->image=Post::model()->seo($model->no_nspm).'.'.$tmp->extensionName; 
			}	

			if($model->save()){
				if(strlen(trim($model->image)) > 0) {
					$tmp->saveAs(Yii::getPathOfAlias('webroot').'/image/sni/cover/'.$model->image);
				}					
				$this->redirect(array('view','id'=>$model->id_standar));
			}
		}

		$this->render('update_cover',array(
			'model'=>$model,
			));
	}	


	public function actionDetail($id)
	{
		$this->layout = "front_intro";	

		$update=Sni::model()->findByPk($id);
		$update->tanggal_lihat = date('Y-m-d h:i:s');
		$update->views += 1;
		$update->save();

		$dataKomentar=new CActiveDataProvider('Komentar',
			array(
				'criteria'=>array('condition'=>'standar_id='.$id,'order'=>'tanggal_komentar DESC'),
				)
			);

		$komentar=new Komentar;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Komentar']))
		{
			$komentar->attributes=$_POST['Komentar'];
			$komentar->tanggal_komentar = date('Y-m-d h:i:s');
			$komentar->pengguna_id = YII::app()->user->id;
			$komentar->status = 1;
			$komentar->standar_id = $id;
			if($komentar->save()){
				$this->refresh();
			}
		}

		$this->render('detail',array(
			'model'=>$this->loadModel($id),
			'dataKomentar'=>$dataKomentar,
			'komentar'=>$komentar,
			));

	}		

	public function actionSearch()
	{
		$this->layout = "front_page";	
		$dataProvider=new CActiveDataProvider('Sni',array('criteria'=>array('condition'=>'kd_statusstandar=01','order'=>'judul ASC')));			
		$dataProvider->setPagination(false);
		$this->render('list',array(
			'dataProvider'=>$dataProvider,
			));
	}

	public function actionAddSNI()
	{
		$model=new Sni;
		$model->setScenario('create');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Sni']))
		{
			$model->attributes=$_POST['Sni'];
			$model->user_id = YII::app()->user->id;
			$model->tanggal_buat = date('Y-m-d h:i:s');		
			$model->kd_statusstandar = "01";	
			$model->status = 0;
			$model->views = 0;
			$model->download = 0;
			if($model->save()){
				$this->redirect(array('view','id'=>$model->id_standar));
			}
		}

		$this->render('create_sni',array(
			'model'=>$model,
			));
	}

	public function actionAddPedomanTeknis()
	{
		$model=new Sni;
		$model->setScenario('create');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Sni']))
		{
			$model->attributes=$_POST['Sni'];
			$model->user_id = YII::app()->user->id;
			$model->tanggal_buat = date('Y-m-d h:i:s');		
			$model->kd_statusstandar = "02";	
			$model->status = 0;
			$model->views = 0;
			$model->download = 0;
			if($model->save()){
				$this->redirect(array('view','id'=>$model->id_standar));
			}
		}

		$this->render('create_pedoman_teknis',array(
			'model'=>$model,
			));
	}	

	public function actionAddPetunjukTeknis()
	{
		$model=new Sni;
		$model->setScenario('create');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Sni']))
		{
			$model->attributes=$_POST['Sni'];
			$model->user_id = YII::app()->user->id;
			$model->tanggal_buat = date('Y-m-d h:i:s');		
			$model->kd_statusstandar = "03";	
			$model->status = 0;
			$model->views = 0;
			$model->download = 0;
			if($model->save()){
				$this->redirect(array('view','id'=>$model->id_standar));
			}
		}

		$this->render('create_petunjuk_teknis',array(
			'model'=>$model,
			));
	}		

	public function actionDownloadIsi($id)
	{
		$files = Sni::model()->findByPk($id);
		$file = YII::app()->baseUrl."/image/sni/isi/".$files->file_isi;
		$files->download += 1;
		$files->save();
		$this->redirect($file);
	}

	public function actionDownloadRingkasan($id)
	{
		$files = Sni::model()->findByPk($id);
		$file = YII::app()->baseUrl."/image/sni/ringkasan/".$files->file_ringkasan;
		$files->download += 1;
		$files->save();
		$this->redirect($file);
	}		
	
	public function actionSearchSni()
	{
		$this->layout = "front_page";	
		$dataProvider=new CActiveDataProvider('Sni',array('criteria'=>array('condition'=>'kd_statusstandar=01','order'=>'judul ASC')));	
		$dataProvider->setPagination(false);
		$this->render('list',array(
			'dataProvider'=>$dataProvider,
			));
	}
	
	public function actionSearchPedomanTeknis()
	{
		$this->layout = "front_page";	
		$dataProvider=new CActiveDataProvider('Sni',array('criteria'=>array('condition'=>'kd_statusstandar=02','order'=>'judul DESC')));	
		$dataProvider->setPagination(false);
		$this->render('list_pedoman_teknis',array(
			'dataProvider'=>$dataProvider,
			));
	}
	
	public function actionSearchPetunjukTeknis()
	{
		$this->layout = "front_page";	
		$dataProvider=new CActiveDataProvider('Sni',array('criteria'=>array('condition'=>'kd_statusstandar=03','order'=>'judul ASC')));	
		$dataProvider->setPagination(false);
		$this->render('list_petunjuk_teknis',array(
			'dataProvider'=>$dataProvider,
			));
	}	
	
	public function actionExcel()
	{
		$dataProvider=new CActiveDataProvider('Sni');
		$this->render('excel',array(
			'dataProvider'=>$dataProvider,
			));
	}	
	
	

}
