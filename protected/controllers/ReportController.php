<?php

class ReportController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public $layout='back_page';
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
				'actions'=>array('bidang','listbidang','standar','liststandar','sni','listsni','newbidang','newlistbidang','newstandar','newliststandar','newpengguna','newlistpengguna'),
				'users'=>array('@'),
				),
			array('deny',
				'users'=>array('*'),
				),
			);
	}	

	public function actionBidang()
	{
		$bidang = 01;
		$this->render('old/bidang',array(
			'bidang'=>$bidang,
			));
	}	

	public function actionListBidang()
	{
		$bidang = $_POST['bidang'];
		$this->render('old/bidang',array(
			'bidang'=>$bidang,
			));
	}	

	public function actionStandar()
	{
		$standar = 01;
		$this->render('old/standar',array(
			'standar'=>$standar,
			));
	}	

	public function actionListStandar()
	{
		$standar = $_POST['standar'];
		$this->render('old/standar',array(
			'standar'=>$standar,
			));
	}	

	public function actionSni()
	{
		$sni = 01;
		$this->render('old/sni',array(
			'sni'=>$sni,
			));
	}	

	public function actionListSni()
	{
		$sni = $_POST['sni'];
		$this->render('old/sni',array(
			'sni'=>$sni,
			));
	}	

	// New

	public function actionNewBidang()
	{
		$bidang = 01;
		$dataProvider=new CActiveDataProvider('Sni',
			array(
				'criteria'=>array(
					'condition'=>'kd_statusstandar=01 AND kd_bidang='.$bidang,
					'order'=>'tahun DESC',
					)));	
		$dataProvider->setPagination(false);

		$this->render('new/bidang',array(
			'bidang'=>$bidang,
			'nm_bidang'=>"Umum",
			'dataProvider'=>$dataProvider,
			));
	}	

	public function actionNewListBidang()
	{
		$bidang = $_POST['bidang'];
		$nm_bidang=Bidang::model()->findByPk($bidang);

		$dataProvider=new CActiveDataProvider('Sni',
			array(
				'criteria'=>array(
					'condition'=>'kd_statusstandar=01 AND kd_bidang='.$bidang,
					'order'=>'tahun DESC',
					)));	

		$dataProvider->setPagination(false);

		$this->render('new/bidang',array(
			'bidang'=>$bidang,
			'nm_bidang'=>$nm_bidang->nm_bidang,
			'dataProvider'=>$dataProvider,
			));
	} 

	public function actionNewStandar()
	{
		$standar = 01;
		$dataProvider=new CActiveDataProvider('Sni',
			array(
				'criteria'=>array(
					'condition'=>'kd_jenisstandar='.$standar,
					'order'=>'tahun DESC',
					)));	
		$dataProvider->setPagination(false);

		$this->render('new/standar',array(
			'standar'=>$standar,
			'jenis'=>"Metode",
			'dataProvider'=>$dataProvider,
			));
	}	

	public function actionNewListStandar()
	{
		$standar = $_POST['standar'];
		$data=JenisStandar::model()->findByPk($standar);

		$dataProvider=new CActiveDataProvider('Sni',
			array(
				'criteria'=>array(
					'condition'=>'kd_jenisstandar='.$standar,
					'order'=>'tahun DESC',
					)));	

		$dataProvider->setPagination(false);

		$this->render('new/standar',array(
			'standar'=>$standar,
			'jenis'=>$data->NM_JENIS_STANDAR1,
			'dataProvider'=>$dataProvider,
			));
	} 
	
	public function actionNewPengguna()
	{
		$jenispekerjaan = 1;
		$data=Jenispekerjaan::model()->findByPk($jenispekerjaan);
        $jenis = $data->JenisPekerjaan;
		$dataProvider=new CActiveDataProvider('Pengguna',
			array(
				'criteria'=>array(
					'condition'=>'Id_jenis_pekerjaan='.$jenispekerjaan,
					'order'=>'Nama ASC',
					)));	

		$this->render('new/pengguna',array(
			'jenis'=>$jenis,
			'dataProvider'=>$dataProvider,
			));
	} 	
	
	public function actionNewListPengguna()
	{
		$jenispekerjaan = $_POST['jenispekerjaan'];
		$data=Jenispekerjaan::model()->findByPk($jenispekerjaan);
        $jenis = $data->JenisPekerjaan;
        
		$dataProvider=new CActiveDataProvider('Pengguna',
			array(
				'criteria'=>array(
					'condition'=>'Id_jenis_pekerjaan='.$jenispekerjaan,
					'order'=>'Nama ASC',
					)));	
					
            $this->widget('EExcelWriter', array(
            	'dataProvider'=>$dataProvider,
            	'title' => 'EExcelWriter',
            	'stream' => FALSE,
            	'fileName' => 'Rekapitulasi Pengguna SIMSTAN.xls',
            	'columns'=>array(
            
                    'Nama',
                    // 'Nama_instansi',
                    'Email',
                    // 'Alamat',
                    array('name'=>'Id_kabupaten_kota',
                    'value'=>'$data->Kota->nama',
                    ),
                    array('name'=>'Id_jenis_pekerjaan',
                    'value'=>'$data->Jenis->JenisPekerjaan',
                    ),
                    array('name'=>'Id_bidang_pekerjaan',
                    'value'=>'$data->Bidang->BidangPekerjaan',
                    ),
                    array('name'=>'Id_tujuan',
                    'value'=>'$data->Tujuan->Tujuan',
                    ),
            							
            		),
            		)); 					

		$this->render('new/pengguna',array(
			'jenis'=>$jenis,
			'dataProvider'=>$dataProvider,
			));
	} 	

}