<?php

/**
 * This is the model class for table "tm_modul_sosialisasi".
 *
 * The followings are the available columns in table 'tm_modul_sosialisasi':
 * @property integer $id
 * @property string $nm_materi
 * @property string $keterangan
 * @property string $nm_file
 * @property string $tgl_input
 * @property string $user_input
 */
class Sosialisasi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tm_modul_sosialisasi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nm_materi, keterangan, tgl_input, user_input', 'required'),
			array('nm_materi', 'length', 'max'=>250),
			array('keterangan', 'length', 'max'=>255),
			array('nm_file', 'length', 'max'=>100),
			array('user_input', 'length', 'max'=>50),
			array('tgl_input', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nm_materi, keterangan, nm_file, tgl_input, user_input', 'safe', 'on'=>'search'),
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
			'User'=>array(self::BELONGS_TO,'User','user_input'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nm_materi' => 'Nama Materi',
			'keterangan' => 'Keterangan',
			'nm_file' => 'Nama File',
			'tgl_input' => 'Tgl Input',
			'user_input' => 'User Input',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('nm_materi',$this->nm_materi,true);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('nm_file',$this->nm_file,true);
		$criteria->compare('tgl_input',$this->tgl_input,true);
		$criteria->compare('user_input',$this->user_input,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sosialisasi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
