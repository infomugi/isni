<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
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

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */

	public function actionIndex()
	{
		$this->layout = "front_intro";	

		$dataProvider=new CActiveDataProvider('Stream',
			array(
				'criteria'=>array(
					'condition'=>'type=2 AND status = 1',
					'order'=>'id_stream DESC',
					'limit'=>1
					),
				'pagination'=>false,
				));

		$dataEvent=new CActiveDataProvider('Event',
			array(
				'criteria'=>array(
					'condition'=>'status = 1',
					'order'=>'id_event DESC',
					'limit'=>2
					),
				'pagination'=>array(
					'pageSize'=>'2'
					),
				));	

		$dataSni=new CActiveDataProvider('Sni',
			array(
				'criteria'=>array(
					'condition'=>'status = 1',
					'order'=>'views DESC',
					'limit'=>2
					),
				'pagination'=>array(
					'pageSize'=>'2'
					),
				));						

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			'dataEvent'=>$dataEvent,
			'dataSni'=>$dataSni,
			));
	}		

	public function actionContact()
	{
		$this->layout = "front_index";		
		$model=new Contact;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Contact']))
		{
			$model->attributes=$_POST['Contact'];
			$model->created_date = date('Y-m-d h:i:s');
			$model->status=0;
			$model->view=0;
			if($model->save())
				$this->refresh();
		}

		$this->render('contact',array(
			'model'=>$model,
			));
	}		

	public function actionDashboard()
	{	
		if(YII::app()->user->isGuest){
			$this->actionLogin();
		}else{
			if(Yii::app()->user->getLevel()==1){

				$data['start']=1900;
				$data['end']=2020;

				$this->layout = "back_page";
				$this->render('dashboard_new',array('data'=>$data));

			}else{
				$this->redirect('index.php?r=site/index');
			}
		}
	}

	public function actionSearch()
	{	
		if(YII::app()->user->isGuest){
			$this->actionLogin();
		}else{
			if(Yii::app()->user->getLevel()==1){
				$data['start']=$_POST['start'];
				$data['end']=$_POST['end'];
				$this->layout = "back_page";
				$this->render('dashboard_new',array('data'=>$data));
				
			}else{
				$this->redirect('index');
			}
		}
	}	

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		$this->layout = "error";
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	public function actionLogin()
	{
		$this->layout="signin";		
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				//$userid,$description,$activityid,$type,$point,$status
				Activities::model()->my(YII::app()->user->id,"Login dari IP : ".Yii::app()->request->getUserHostAddress(),1,1,3,0);
			if(Yii::app()->user->getLevel()==1){
				Yii::app()->user->setFlash('Success', 'Berhasil login dari IP '.Yii::app()->request->getUserHostAddress().'');
				$this->redirect('dashboard');
			}else{
				$this->redirect('login');
			}
		}
		// display the login form
		$this->render('login_admin',array('model'=>$model));
	}	

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		//$userid,$description,$activityid,$type,$point,$status
		Activities::model()->my(YII::app()->user->id,"Logout dari IP : ".Yii::app()->request->getUserHostAddress(),0,0,0,0);
		$model=User::model()->findByPk(YII::app()->user->id);
		$model->visit_time = date('Y-m-d h:i:s');
		$model->update();
		Yii::app()->user->logout();
		$this->redirect('login');
	}

	public function actionAbout()
	{
		$this->layout = "front_page";		
		$this->render('index_about');
	}	

	public function actionHukum()
	{
		$this->layout = "front_page";		
		$this->render('index_dasar_hukum');
	}		

	public function actionIstilah()
	{
		$this->layout = "front_page";		
		$this->render('istilah');
	}	

	public function actionSMM()
	{
		$this->layout = "front_page";		
		$this->render('index_smm');
	}	

	public function actionLayanan()
	{
		$this->layout = "front_page";		
		$this->render('index_detail_layanan');
	}	


	public function actionSNI($type)
	{
		$this->layout = "front_page";		
		$this->render('index_sni',array('type'=>$type));
	}

	public function actionDetailSNI($type,$id)
	{
		$this->layout = "front_page";

		$dataKomentar=new CActiveDataProvider('Komentar',
			array(
				'criteria'=>array('condition'=>'standar_id='.$id,'order'=>'tanggal_komentar DESC'),
				)
			);

		$model=new Komentar;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Komentar']))
		{
			$model->attributes=$_POST['Komentar'];
			$model->tanggal_komentar = date('Y-m-d h:i:s');
			$model->pengguna_id = YII::app()->user->id;
			$model->status = 1;
			$model->standar_id = $id;
			if($model->save()){
				$this->refresh();
			}
		}

		$this->render('index_detail_sni',array(
			'dataKomentar'=>$dataKomentar,
			'model'=>$model,
			'id'=>$id,
			'type'=>$type,
			));				
	}	

	public function actionDetail($id)
	{
		$this->layout = "front_page";

		$dataKomentar=new CActiveDataProvider('Komentar',
			array(
				'criteria'=>array('condition'=>'standar_id='.$id,'order'=>'tanggal_komentar DESC'),
				)
			);

		$model=new Komentar;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Komentar']))
		{
			$model->attributes=$_POST['Komentar'];
			$model->tanggal_komentar = date('Y-m-d h:i:s');
			$model->pengguna_id = YII::app()->user->id;
			$model->status = 1;
			$model->standar_id = $id;
			if($model->save()){
				$this->refresh();
			}
		}

		$this->render('index_detail',array(
			'dataKomentar'=>$dataKomentar,
			'model'=>$model,
			'id'=>$id
			));				
	}	

	public function actionJsonSNI($type)
	{
		$this->layout = false;
		$datas = array();
		$data = array();
		$ini = array();
		$fp = fopen(SearchData::model()->type($type).'.json', 'w');
		foreach (SearchData::getSNI($type) as $data) {	
			$datas = array(
				'id'=>$data['id'],
				'no_nspm'=>$data['no_nspm'],
				'judul'=>$data['judul'],
				'ruang_lingkup'=>$data['ruang_lingkup'],
				'bidang'=>$data['nama_bidang']
				);
			$json = json_encode($datas, JSON_PRETTY_PRINT);
			echo "<pre>" . $json . "</pre>";
			fwrite($fp, json_encode($datas));
		}	

		fclose($fp);
	}	

	// Registrasi Pengguna 
	public function actionRegistrasi()
	{
		$this->layout = "front_page";	

		$model=new Pengguna;

		if(isset($_POST['Pengguna']))
		{
			$model->attributes=$_POST['Pengguna'];
			$model->Password = md5($model->Password);
			$model->Tanggal_entry = date('Y-m-d h:i:s');
			$model->Flag_register = 1;
			if($model->save()){
				$this->redirect(array('masuk'));
			}
		}

		$this->render('index_registrasi',array(
			'model'=>$model,
			));

	}	

	// Login Pengguna
	public function actionMasuk()
	{
		$this->layout="login";		
		$model=new MasukForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['MasukForm']))
		{
			$model->attributes=$_POST['MasukForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login()){
				$this->redirect('beranda');
			}
		}
		// display the login form
		$this->render('login_pengguna',array('model'=>$model));
	}

	public function actionKeluar()
	{
		Yii::app()->user->logout();
		$this->redirect('index');
	}	

	public function actionBeranda()
	{	
		$this->layout = "front_page";	
		if(YII::app()->user->isGuest){
			$this->actionMasuk();
		}else{
			$this->render('dashboard_pengguna',array(
				'model'=>$this->loadPengguna(YII::app()->user->id),
				));			
		}
	}		

	public function actionProfile()
	{	
		$this->layout = "front_page";	
		if(YII::app()->user->isGuest){
			$this->actionMasuk();
		}else{

			$model=$this->loadPengguna(YII::app()->user->id);

			if(isset($_POST['Pengguna']))
			{
				$model->attributes=$_POST['Pengguna'];
				if($model->save())
					$this->refresh();
			}

			$this->render('index_registrasi_update',array(
				'model'=>$model,
				));				
		}

	}	

	public function actionPassword()
	{	
		$this->layout = "front_page";	
		if(YII::app()->user->isGuest){
			$this->actionMasuk();
		}else{

			$model=$this->loadPengguna(YII::app()->user->id);

			if(isset($_POST['Pengguna']))
			{
				$model->attributes=$_POST['Pengguna'];
				$model->Password = md5($model->Password);
				if($model->save()){
					$this->redirect(array('view','id'=>$model->Id));
				}
			}

			$this->render('index_registrasi_password',array(
				'model'=>$model,
				));				
		}

	}			

	public function loadPengguna($id)
	{
		$model=Pengguna::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}	

	public function loadEvent($id)
	{
		$model=Event::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}		

	public function actionEvent($id)
	{
		$this->layout = "front_page";
		$this->render('index_detail_event',array(
			'model'=>$this->loadEvent($id),
			));
	}		

	public function actionPenerapanStandar()
	{
		$this->layout = "front_page";
		$model=new Penerapan('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Penerapan']))
			$model->attributes=$_GET['Penerapan'];

		$this->render('index_penerapan_standar',array(
			'model'=>$model,
			));
	}	

	public function actionInspeksiTeknis()
	{
		$this->layout = "front_page";
		$model=new Inspeksiteknis('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Inspeksiteknis']))
			$model->attributes=$_GET['Inspeksiteknis'];

		$this->render('index_inspeksi_teknis',array(
			'model'=>$model,
			));
	}	

	public function actionAdvisTeknis()
	{
		$this->layout = "front_page";
		$model=new Advisteknis('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Advisteknis']))
			$model->attributes=$_GET['Advisteknis'];

		$this->render('index_advis_teknis',array(
			'model'=>$model,
			));
	}	

	public function actionPublikasiSpm()
	{
		$this->layout = "front_page";
		$model=new Spm('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Spm']))
			$model->attributes=$_GET['Spm'];

		$this->render('index_publikasi_spm',array(
			'model'=>$model,
			));
	}	

	public function actionSosialisasi()
	{
		$this->layout = "front_page";
		$model=new Sosialisasi('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Sosialisasi']))
			$model->attributes=$_GET['Sosialisasi'];

		$this->render('index_pelaksanaan_sosialisasi',array(
			'model'=>$model,
			));
	}

	public function actionFamilyTree()
	{
		$this->layout = "front_page";
		$model=new Familytree('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Familytree']))
			$model->attributes=$_GET['Familytree'];

		$this->render('index_family_tree',array(
			'model'=>$model,
			));
	}	

	public function actionNews()
	{
		$this->layout = "front_page";
		$model=new Post('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Post']))
			$model->attributes=$_GET['Post'];

		$this->render('index_news',array(
			'model'=>$model,
			));
	}		

	public function actionResult()
	{	
		$this->layout = "front_page";
		$criteria = new CDbCriteria();

		if(isset($_GET['q']))
		{
			$q = $_GET['q'];
			$criteria->compare('no_nspm', $q, true, 'OR');
			$criteria->compare('judul', $q, true, 'OR');
		}

		$dataProvider=new CActiveDataProvider("Sni", array('criteria'=>$criteria));

		$this->render('index_result',array(
			'dataProvider'=>$dataProvider,
			'q'=>$q
			));
	}											

}