<?php

class CategoryController extends Controller
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
				'actions'=>array('view','index','listproduct','tag','listpost','listproductpopular','listproductlastest','list'),
				'users'=>array('*'),
				),
			array('allow',
				'actions'=>array('create','update','view','delete','admin','index','listproduct','image','listpost'),
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
		$dataProvider=new CActiveDataProvider('Tag',array('criteria'=>array('condition'=>'category_id='.$id)));
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionList($name)
	{
		$this->layout = "front_page";	
		$data=$this->loadProduct($name);	
		$dataProvider=new CActiveDataProvider('Product',array('criteria'=>array('condition'=>'category_id='.$data->id_category)));
		$this->render('list',array(
			'model'=>$this->loadProduct($name),
			'dataProvider'=>$dataProvider,
		));	

	}

	public function actionListProduct($name)
	{
		$this->layout = "front_page";	
		$data=$this->loadProduct($name);

		$criteria = new CDbCriteria;
		$criteria->condition = 'category.id_category = :category_id';
		$criteria->params = array(':category_id'=>$data->id_category);
		$criteria->join = 'LEFT JOIN category ON category.id_category = t.category_id'; 
		$criteria->order = 't.created_date DESC';	
		$criteria->limit = 9;
		$criteria->offset = 9;

		$dataProvider=new CActiveDataProvider('Product',array(
			'criteria'=>$criteria,		
			'pagination'=>array(
				'pageSize'=>'9',
				)
			));	

		$this->render('list_product',array(
			'model'=>$this->loadProduct($name),
			'dataProvider'=>$dataProvider,
		));	

	}

	public function actionListPost($name)
	{
		$this->layout = "front_page";	
		$data=$this->loadProduct($name);	

		$criteria = new CDbCriteria;
		$criteria->condition = 'category.id_category = :id_category';
		$criteria->params = array(':id_category'=>$data->id_category);
		$criteria->join = 'LEFT JOIN category ON category.id_category = t.id_category'; 
		$criteria->order = 't.created_date DESC';	
		$criteria->limit = 5;
		$criteria->offset = 5;

		$dataProvider=new CActiveDataProvider('Post',array(
			'criteria'=>$criteria,		
			'pagination'=>array(
				'pageSize'=>'5',
				)
			));			

		$this->render('list_post',array(
			'model'=>$this->loadProduct($name),
			'dataProvider'=>$dataProvider,
		));	

	}	

	public function actionTag($name)
	{
		$this->layout = "front_page";	
		$data=$this->loadTag($name);	

		$criteria = new CDbCriteria;
		$criteria->condition = 'category_sub.id_category_sub = :id_tag';
		$criteria->params = array(':id_tag'=>$data->id_category_sub);
		$criteria->join = 'LEFT JOIN category_sub ON category_sub.id_category_sub = t.id_tag'; 
		$criteria->order = 't.created_date DESC';	
		$criteria->limit = 5;
		$criteria->offset = 5;

		$dataProvider=new CActiveDataProvider('Post',array(
			'criteria'=>$criteria,		
			'pagination'=>array(
				'pageSize'=>'5',
				)
			));		

		$this->render('list_post',array(
			'model'=>$this->loadTag($name),
			'dataProvider'=>$dataProvider,
		));	

	}	

	public function actionListProductPopular()
	{
		$this->layout = "front_page";	
		$criteria = new CDbCriteria;
		$criteria->order = 't.views DESC';	
		$criteria->limit = 3;
		$criteria->offset = 3;

		$dataProvider=new CActiveDataProvider('Product',array(
			'criteria'=>$criteria,		
			'pagination'=>array(
				'pageSize'=>'3',
				)
			));	

		$this->render('list_product_popular',array(
			'dataProvider'=>$dataProvider,
		));	

	}	


	public function actionListProductLastest()
	{
		$this->layout = "front_page";	
		$criteria = new CDbCriteria;
		$criteria->order = 't.created_date DESC';	
		$criteria->limit = 3;
		$criteria->offset = 3;

		$dataProvider=new CActiveDataProvider('Product',array(
			'criteria'=>$criteria,		
			'pagination'=>array(
				'pageSize'=>'3',
				)
			));	

		$this->render('list_product_popular',array(
			'dataProvider'=>$dataProvider,
		));	

	}		

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Category;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Category']))
		{
			$model->attributes=$_POST['Category'];
			$model->status = 1;
			
			$model->status;
			$tmp;
			if(strlen(trim(CUploadedFile::getInstance($model,'image'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'image'); 
				$model->image=Product::model()->seo($model->name).'.'.$tmp->extensionName; 
			}

			if($model->save())
			{
				if(strlen(trim($model->image)) > 0) {
					$tmp->saveAs(Yii::getPathOfAlias('webroot').'/image/category/big/'.$model->image);
				}

				$this->redirect(array('view','id'=>$model->id_category));
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

		if(isset($_POST['Category']))
		{
			$model->attributes=$_POST['Category'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_category));
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
		$dataProvider=new CActiveDataProvider('Category');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Category('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Category']))
			$model->attributes=$_GET['Category'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Category the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Category::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function loadTag($name)
	{
		$model=Tag::model()->findByAttributes(array('url'=>$name));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}	

	public function loadProduct($name)
	{
		$model=Category::model()->findByAttributes(array('url'=>$name));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	/**
	 * Performs the AJAX validation.
	 * @param Category $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='category-form')
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

		if(isset($_POST['Category']))
		{
			$model->attributes=$_POST['Category'];
			$tmp;
			if(strlen(trim(CUploadedFile::getInstance($model,'image'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'image'); 
				$model->image=Product::model()->seo($model->name).'.'.$tmp->extensionName; 
			}

			if($model->save())
			{
				if(strlen(trim($model->image)) > 0) {
					$tmp->saveAs(Yii::getPathOfAlias('webroot').'/image/category/big/'.$model->image);
				}

				$this->redirect(array('view','id'=>$model->id_category));
			}
		}

		$this->render('image',array(
			'model'=>$model,
		));
	}	
}
