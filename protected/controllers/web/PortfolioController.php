<?php

class PortfolioController extends Controller
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
				'actions'=>array('create','update','view','delete','admin','index','image'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->record->level==1',
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
		$model=new Portfolio;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Portfolio']))
		{

			$model->attributes=$_POST['Portfolio'];
			$tmp;
			$model->status = 1;
			if(strlen(trim(CUploadedFile::getInstance($model,'image'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'image'); 
				$model->image=Product::model()->seo($model->name).'.'.$tmp->extensionName; 
			}

			if($model->save()){
				if(strlen(trim($model->image)) > 0) {
					$tmp->saveAs(Yii::getPathOfAlias('webroot').'/image/portfolio/big/'.$model->image);
				}				
				$this->redirect(array('view','id'=>$model->id_portfolio));
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

		if(isset($_POST['Portfolio']))
		{
			$model->attributes=$_POST['Portfolio'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_portfolio));
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
		$model=Portfolio::model()->findByPk($id);
		$imageLocationOrginal = Yii::getPathOfAlias('webroot')."/image/portfolio/big/";
		$imageLocationMiddle = Yii::getPathOfAlias('webroot')."/image/portfolio/middle/";
		$imageLocationSmall = Yii::getPathOfAlias('webroot')."/image/portfolio/small/";
		if(!empty($model->image)){
			unlink($imageLocationOrginal.$model->image);
			unlink($imageLocationSmall.$model->image);
			unlink($imageLocationMiddle.$model->image);
		}		
		$model->delete();
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Portfolio');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Portfolio('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Portfolio']))
			$model->attributes=$_GET['Portfolio'];

		$this->render('admin',array(
			'model'=>$model,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Portfolio the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Portfolio::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Portfolio $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='portfolio-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionImage($id)
	{
		$model=$this->loadModel($id);


		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Portfolio']))
		{
			$model->attributes=$_POST['Portfolio'];
			$tmp;
			if(strlen(trim(CUploadedFile::getInstance($model,'image'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'image'); 
				$model->image=Product::model()->seo($model->name).'.'.$tmp->extensionName; 
			}
			if($model->save()){
				
				if(strlen(trim($model->image)) > 0) {
					$tmp->saveAs(Yii::getPathOfAlias('webroot').'/image/portfolio/big/'.$model->image);
					$this->redirect(array('view','id'=>$model->id_portfolio));
				}		
			}	
		}

		$this->render('image',array(
			'model'=>$model,
			));
	}	
}
