<?php

class UserController extends Controller
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
				'actions'=>array('create','update','view','delete','admin','profile','edit','index','image','password'),
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
		$model=new User;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			$model->create_time = date('Y-m-d h:i:s');
			$model->update_time = date('Y-m-d h:i:s');
			$model->visit_time = date('Y-m-d h:i:s');
			$model->status = 0;
			$model->active = 0;
			$model->ipaddress = 0;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_user));
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

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_user));
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
		$dataProvider=new CActiveDataProvider('User');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('admin',array(
			'model'=>$model,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return User the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param User $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionProfile()
	{
		$model=$this->loadModel(YII::app()->user->id);
		$this->render('view',array(
			'model'=>$model,
			));
	}	

	public function actionEdit()
	{
		$model=$this->loadModel(YII::app()->user->id);
		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			$model->update_time = date('Y-m-d h:i:s');
			if($model->save())
				$this->redirect(array('profile'));
		}

		$this->render('update',array(
			'model'=>$model,
			));
	}

	public function actionImage()
	{
		$model=$this->loadModel(YII::app()->user->id);
		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			$model->update_time = date('Y-m-d h:i:s');
			$tmp;
			if(strlen(trim(CUploadedFile::getInstance($model,'image'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'image'); 
				$model->image=Product::model()->seo($model->fullname).'.'.$tmp->extensionName; 
			}			
			if($model->save()){
				if(strlen(trim($model->image)) > 0) {
					$tmp->saveAs(Yii::getPathOfAlias('webroot').'/image/users/big/'.$model->image);
				}
				$this->redirect(array('profile'));
			}
		}

		$this->render('image',array(
			'model'=>$model,
			));
	}	


	public function actionPassword()
	{
		$model=$this->loadModel(YII::app()->user->id);
		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			$model->update_time = date('Y-m-d h:i:s');
			$model->password = md5($model->password);
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_user));
		}

		$this->render('password',array(
			'model'=>$model,
			));
	}	


}
