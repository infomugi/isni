<?php

class TagController extends Controller
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
				'actions'=>array('create','update','view','delete','admin','index','data','sub'),
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
		$model=$this->loadModel($id);
		$model->url = Post::model()->seo($model->name);
		$model->save();
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($id)
	{
		$model=new Tag;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Tag']))
		{
			$model->attributes=$_POST['Tag'];
			$model->category_id = $id;
			$model->status = 1;
			if($model->save())
				$this->redirect(array('web/category/view','id'=>$model->category_id));
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

		if(isset($_POST['Tag']))
		{
			$model->attributes=$_POST['Tag'];
			if($model->save())
				$this->redirect(array('web/category/view','id'=>$model->category_id));
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
		$dataProvider=new CActiveDataProvider('Tag');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Tag('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Tag']))
			$model->attributes=$_GET['Tag'];

		$this->render('admin',array(
			'model'=>$model,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Tag the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Tag::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Tag $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tag-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionData()
	{
		$data=Tag::model()->findAll('category_id=:category_id', 
			array(':category_id'=>(int) $_POST['category_id']));
		$data=CHtml::listData($data,'id_category_sub','name');
		echo "<option value=''>-- Pilih Tag --</option>";
		foreach($data as $value=>$nama)
			echo CHtml::tag('option', array('value'=>$value),CHtml::encode($nama),true);
	}

	public function actionSub()
	{
		$data=Tag::model()->findAll('category_id=:id_tag', 
			array(':id_tag'=>(int) $_POST['id_tag']));
		$data=CHtml::listData($data,'id_category_sub','name');
		echo "<option value=''>-- Pilih Tag --</option>";
		foreach($data as $value=>$nama)
			echo CHtml::tag('option', array('value'=>$value),CHtml::encode($nama),true);
	}	
}