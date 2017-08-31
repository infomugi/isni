<?php

class StreamController extends Controller
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
			// 'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('create','update','view','delete','admin','index','changeimage','enable','disable','youtube','image','indexvideo','video'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->record->level==1',
				),
			array('allow',
				'actions'=>array('listvideo','watch'),
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
		if(Yii::app()->request->isAjaxRequest)
		{
			$this->renderPartial('video',array(
				'model'=>$this->loadModel($id),
				), false, true);
		}
		else
		{
			$this->render('video',array(
				'model'=>$this->loadModel($id),
				));
		}
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionYoutube()
	{
		$model=new Stream;
		$model->setScenario('create');
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Stream']))
		{
			$model->attributes=$_POST['Stream'];
			$model->created_date = date('Y-m-d h:i:s');
			$model->id_user = YII::app()->user->id;
			$model->type = 2;
			$model->status = 0;			
			if(strlen(trim(CUploadedFile::getInstance($model,'image'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'image'); 
				$model->image=Post::model()->seo($model->name).'.'.$tmp->extensionName; 
			}

			if($model->save()){
				if(strlen(trim($model->image)) > 0) {
					$tmp->saveAs(Yii::getPathOfAlias('webroot').'/image/stream/big/'.$model->image);
					// Stream::model()->thumbSmall($model->image);
					// Stream::model()->thumbMiddle($model->image);
				}				
				$this->redirect(array('video','id'=>$model->id_stream));
			}
		}

		$this->render('youtube',array(
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
		$model->setScenario('create');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Stream']))
		{
			$model->attributes=$_POST['Stream'];
			$model->id_user = YII::app()->user->id;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_stream));
		}

		$this->render('update',array(
			'model'=>$model,
			));
	}


	public function actionImage($id)
	{
		$model=$this->loadModel($id);
		$model->setScenario('image');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Stream']))
		{
			$model->attributes=$_POST['Stream'];
			$model->id_user = YII::app()->user->id;
			if(strlen(trim(CUploadedFile::getInstance($model,'image'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'image'); 
				$model->image=Post::model()->seo($model->name).'.'.$tmp->extensionName; 
			}

			if($model->save()){
				if(strlen(trim($model->image)) > 0) {
					$tmp->saveAs(Yii::getPathOfAlias('webroot').'/image/stream/big/'.$model->image);
					Stream::model()->thumbSmall($model->image);
					Stream::model()->thumbMiddle($model->image);
				}	
				$this->redirect(array('view','id'=>$model->id_stream));
			}
		}

		$this->render('image',array(
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
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Stream');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}	

	public function actionIndexVideo()
	{
		$dataProvider=new CActiveDataProvider('Stream',array('criteria'=>array('condition'=>'type=2')));
		$this->render('index_video',array(
			'dataProvider'=>$dataProvider,
			));
	}		

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Stream('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Stream']))
			$model->attributes=$_GET['Stream'];

		$this->render('admin',array(
			'model'=>$model,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Stream the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Stream::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Stream $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='stream-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionEnable($id)
	{
		$model=$this->loadModel($id);
		$model->status = 1;
		$model->save();
		$this->redirect(array('index'));
	}	

	public function actionDisable($id)
	{
		$model=$this->loadModel($id);
		$model->status = 0;
		$model->save();
		$this->redirect(array('index'));
	}			

	public function actionListvideo()
	{
		$this->layout = "frontend";
		$dataProvider=new CActiveDataProvider('Stream',array('criteria'=>array('condition'=>'type=2 AND status = 1')));
		$this->render('list',array(
			'dataProvider'=>$dataProvider,
			));
	}		

	public function actionWatch($id)
	{
		$this->layout = "frontend";
		$this->render('detail',array(
			'model'=>$this->loadModel($id),
			));
	}
}
