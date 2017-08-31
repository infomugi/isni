<?php

/**
 * This is the model class for table "kuesioner".
 *
 * The followings are the available columns in table 'kuesioner':
 * @property integer $id_kuesioner
 * @property string $tanggal_kuesioner
 * @property integer $user_id
 * @property integer $soal_1
 * @property integer $soal_2
 * @property integer $soal_3
 * @property integer $soal_4
 * @property integer $soal_5
 * @property integer $soal_6
 * @property integer $soal_7
 * @property integer $soal_8
 * @property integer $soal_9
 * @property integer $soal_10
 * @property integer $soal_11
 * @property integer $soal_12
 * @property integer $soal_13
 * @property integer $soal_14
 * @property integer $soal_15
 * @property string $keterangan
 * @property integer $status
 */
class Kuesioner extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kuesioner';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tanggal_kuesioner, user_id, soal_1, soal_2, soal_3, soal_4, soal_5, status', 'required'),
			// array('tanggal_kuesioner, user_id, soal_1, soal_2, soal_3, soal_4, soal_5, soal_6, soal_7, soal_8, soal_9, soal_10, soal_11, soal_12, soal_13, soal_14, soal_15, status', 'required'),
			array('user_id, soal_1, soal_2, soal_3, soal_4, soal_5, soal_6, soal_7, soal_8, soal_9, soal_10, soal_11, soal_12, soal_13, soal_14, soal_15, status', 'numerical', 'integerOnly'=>true),
			array('keterangan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_kuesioner, tanggal_kuesioner, user_id, soal_1, soal_2, soal_3, soal_4, soal_5, soal_6, soal_7, soal_8, soal_9, soal_10, soal_11, soal_12, soal_13, soal_14, soal_15, keterangan, status', 'safe', 'on'=>'search'),
			);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'Pengguna'=>array(self::BELONGS_TO,'Pengguna','user_id'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_kuesioner' => 'Id Kuesioner',
			'tanggal_kuesioner' => 'Tanggal Kuesioner',
			'user_id' => 'User',
			'soal_1' => 'Apakah Informasi pada Website ini dapat dicerna dengan mudah',
			'soal_2' => 'Apakah Pencarian SNI mudah digunakan ?',
			'soal_3' => 'Bagaimana Tampilan Website SIMSTAN ini ?',
			'soal_4' => 'Bagaimana proses perubahan sistem yang berjalan',
			'soal_5' => 'Bagaimana relevansi informasi yang dihasilkan',
			'soal_6' => 'Soal 6',
			'soal_7' => 'Soal 7',
			'soal_8' => 'Soal 8',
			'soal_9' => 'Soal 9',
			'soal_10' => 'Soal 10',
			'soal_11' => 'Soal 11',
			'soal_12' => 'Soal 12',
			'soal_13' => 'Soal 13',
			'soal_14' => 'Soal 14',
			'soal_15' => 'Soal 15',
			'keterangan' => 'Keterangan',
			'status' => 'Status',
			);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_kuesioner',$this->id_kuesioner);
		$criteria->compare('tanggal_kuesioner',$this->tanggal_kuesioner,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('soal_1',$this->soal_1);
		$criteria->compare('soal_2',$this->soal_2);
		$criteria->compare('soal_3',$this->soal_3);
		$criteria->compare('soal_4',$this->soal_4);
		$criteria->compare('soal_5',$this->soal_5);
		$criteria->compare('soal_6',$this->soal_6);
		$criteria->compare('soal_7',$this->soal_7);
		$criteria->compare('soal_8',$this->soal_8);
		$criteria->compare('soal_9',$this->soal_9);
		$criteria->compare('soal_10',$this->soal_10);
		$criteria->compare('soal_11',$this->soal_11);
		$criteria->compare('soal_12',$this->soal_12);
		$criteria->compare('soal_13',$this->soal_13);
		$criteria->compare('soal_14',$this->soal_14);
		$criteria->compare('soal_15',$this->soal_15);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kuesioner the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function grade($data){
		if($data==0){
			return "Sangat Tidak Setuju";
		}elseif($data==1){
			return "Tidak Setuju";
		}elseif($data==2){
			return "Setuju";
		}elseif($data==3){
			return "Sangat Setuju";
		}else{
			return "Tidak Diketahui";
		}
	}
}
