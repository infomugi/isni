<?php

class PostController extends Controller
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
				'actions'=>array('create','update','view','delete','admin','index','changeimage','publish','default','updateStats','data','remove','my','news','portfolio','result','page','quotes'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->record->level==1',
				),
			array('allow',
				'actions'=>array('view','index','new','update','my','delete','changeimage','publish','default','news','portfolio','result'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->record->level==2',
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
			$this->renderPartial('view',array(
				'model'=>$this->loadModel($id),
				), false, true);
		}
		else
		{
			$this->render('view',array(
				'model'=>$this->loadModel($id),
				));
		}
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$this->layout = "back_page";
		$model=new Post;
		$model->setScenario('create');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Post']))
		{
			$model->attributes=$_POST['Post'];
			$model->created_date = date('Y-m-d');
			$model->status=1;
			$model->id_user=YII::app()->user->id;
			
			if($model->url==""){
				$seotitle = Post::model()->seo($model->title);
				$model->url = $seotitle;
			}
			if(strlen(trim(CUploadedFile::getInstance($model,'image'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'image'); 
				$model->image=$model->url.'.'.$tmp->extensionName; 
			}

			if($model->save()){
				if(strlen(trim($model->image)) > 0) {
					$tmp->saveAs(Yii::getPathOfAlias('webroot').'/image/news/big/'.$model->image);
				}				
				//$userid,$description,$activityid,$type,$point,$status
				Activities::model()->my($model->id_user,$model->title,$model->id_post,2,3,2);
				Yii::app()->user->setFlash('success', '<b>Successfully!</b> <i>'.$model->title.'</i> has been created.');
				$this->redirect(array('view','id'=>$model->id_post));
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
		$this->layout = "back_page";
		$model=$this->loadModel($id);
		$model->setScenario('update');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Post']))
		{
			$model->attributes=$_POST['Post'];
			if($model->url==""){
				$seotitle = Post::model()->seo($model->title);
				$model->url = $seotitle;
			}	

			if($model->save()){
				//$userid,$description,$activityid,$type,$point,$status
				Activities::model()->my($model->id_user,$model->title,$model->id_post,6,1,10);

				Yii::app()->user->setFlash('success', '<b>Successfully!</b> <i>'.$model->title.'</i> has update.');
				$this->redirect(array('view','id'=>$model->id_post));
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
	public function actionRemove($id)
	{
		$model=$this->loadModel($id);
		$imageLocationOrginal = Yii::getPathOfAlias('webroot')."/image/news/big/";
		$imageLocationSmall = Yii::getPathOfAlias('webroot')."/image/news/small/";
		$imageLocationMiddle = Yii::getPathOfAlias('webroot')."/image/news/middle/";
		if(!empty($model->image)){
			unlink($imageLocationOrginal.$model->image);
			unlink($imageLocationSmall.$model->image);
			unlink($imageLocationMiddle.$model->image);
		}		
		$model->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			Yii::app()->user->setFlash('danger', '<b>Successfully!</b> Your post has remove.');
		$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	public function actionDelete($id)
	{
		$model=$this->loadModel($id);
		$imageLocationOrginal = Yii::getPathOfAlias('webroot')."/image/news/big/";
		$imageLocationSmall = Yii::getPathOfAlias('webroot')."/image/news/small/";
		$imageLocationMiddle = Yii::getPathOfAlias('webroot')."/image/news/middle/";
		if(!empty($model->image)){
			unlink($imageLocationOrginal.$model->image);
			unlink($imageLocationSmall.$model->image);
			unlink($imageLocationMiddle.$model->image);
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
		$criteria = new CDbCriteria;
		$criteria->condition = 'category.type = :type';
		$criteria->params = array(':type'=>1);
		$criteria->join = 'LEFT JOIN category ON category.id_category = t.id_category';
		$criteria->order = 't.id_post DESC';		

		$dataPosts=new CActiveDataProvider('Post',array(
			'criteria'=>$criteria,
			'pagination'=>array(
				'pageSize'=>'4',
				)));	

		$criteria2 = new CDbCriteria;
		$criteria2->condition = 'category.type = :type';
		$criteria2->params = array(':type'=>3);
		$criteria2->join = 'LEFT JOIN category ON category.id_category = t.id_category';
		$criteria2->order = 't.id_post DESC';		

		$dataPortfolio=new CActiveDataProvider('Post',array(
			'criteria'=>$criteria2,
			'pagination'=>array(
				'pageSize'=>'9',
				)));	

		$criteria3 = new CDbCriteria;
		$criteria3->condition = 'category.type = :type';
		$criteria3->params = array(':type'=>2);
		$criteria3->join = 'LEFT JOIN category ON category.id_category = t.id_category';
		$criteria3->order = 't.id_post DESC';		

		$dataNews=new CActiveDataProvider('Post',array(
			'criteria'=>$criteria3,
			'pagination'=>array(
				'pageSize'=>'4',
				)));	

		$this->render('index',array(
			'dataPosts'=>$dataPosts,
			'dataPortfolio'=>$dataPortfolio,
			'dataNews'=>$dataNews,
			));
	}	


	public function actionResult($find='')
	{
		$criteria = new CDbCriteria();
		if(strlen($find)>0)
			$criteria->addSearchCondition('title', $find, true, 'OR');
		$criteria->addSearchCondition('description', $find, true, 'OR');
		$criteria->order = "created_date DESC";
		
		$dataProvider=new CActiveDataProvider('Post', array('criteria'=>$criteria));
		$this->render('result',array(
			'dataProvider'=>$dataProvider,
			));
	}		

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Post('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Post']))
			$model->attributes=$_GET['Post'];

		$this->render('admin',array(
			'model'=>$model,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Post the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Post::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Post $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='post-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionChangeImage($id)
	{
		$model=$this->loadModel($id);
		$model->setScenario('changeImage');
		if($model->id_user==Yii::app()->user->record->id_user){

			if(isset($_POST['Post']))
			{
				$model->attributes=$_POST['Post'];
				$tmp;
				if(strlen(trim(CUploadedFile::getInstance($model,'image'))) > 0) 
				{ 
					$tmp=CUploadedFile::getInstance($model,'image'); 
					$model->image=$model->url.'.'.$tmp->extensionName; 
				}

				if($model->save()){
					if(strlen(trim($model->image)) > 0) {
						$tmp->saveAs(Yii::getPathOfAlias('webroot').'/image/news/big/'.$model->image);
					}
					$this->redirect(array('view','id'=>$model->id_post));
				}
			}

			$this->render('image',array(
				'model'=>$model,
				));

		}else{
			throw new CHttpException(403,'You not authorized to this perfom.');
		}
	}	

	public function actionNew()
	{
		$model=new Post;
		$model->setScenario('create');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Post']))
		{
			$model->attributes=$_POST['Post'];
			$model->created_date = date('Y-m-d');
			$model->status=1;
			$model->id_user=YII::app()->user->id;
			
			//$userid,$description,$activityid,$type,$point,$status
			Activities::model()->my($model->id_user,$model->title,$model->id_post,2,3,2);
			
			if($model->url==""){
				$seotitle = Post::model()->seo($model->title);
				$model->url = $seotitle;
			}
			if(strlen(trim(CUploadedFile::getInstance($model,'image'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'image'); 
				$model->image=$seotitle.'.'.$tmp->extensionName; 
			}


			if($model->save()){
				if(strlen(trim($model->image)) > 0) {
					$tmp->saveAs(Yii::getPathOfAlias('webroot').'/image/news/big/'.$model->image);
					Post::model()->thumbSmall($model->image);
					Post::model()->thumbMiddle($model->image);
				}
				Yii::app()->user->setFlash('success', '<b>Successfully!</b> <i>'.$model->title.'</i> has been created.');
				$this->redirect(array('view','id'=>$model->id_post));
			}
		}

		$this->render('create',array(
			'model'=>$model,
			));
	}

	public function actionMy()
	{
		$dataProvider=new CActiveDataProvider('Post',array(

			'criteria'=>array(
				'condition'=>'id_user = '.YII::app()->user->id,
				'order'=>'created_date DESC'
				)

			));
		$this->render('my',array(
			'dataProvider'=>$dataProvider,
			));
	}	

	public function actionPublish($id)
	{
		$model=$this->loadModel($id);
		$model->status = 1;
		$model->save();
		Yii::app()->user->setFlash('success', '<b>Successfully!</b> <i>'.$model->title.'</i> has published.');
		$this->redirect(array('view','id'=>$model->id_post));
	}	

	public function actionDefault($id)
	{
		$model=$this->loadModel($id);
		$model->status = 0;
		$model->save();
		Yii::app()->user->setFlash('warning', '<b>Successfully!</b> <i>'.$model->title.'</i> has set draft.');
		$this->redirect(array('view','id'=>$model->id_post));

	}		

	public function seoTitle($id)
	{
		$model=Post::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

}
