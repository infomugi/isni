<?php

/**
 * This is the model class for table "tm_publik".
 *
 * The followings are the available columns in table 'tm_publik':
 * @property integer $id
 * @property string $judul
 * @property string $keterangan
 * @property string $nm_file
 * @property integer $id_subject
 */
class Laboratorium extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tm_publik';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('judul, keterangan', 'required'),
			array('id_subject', 'numerical', 'integerOnly'=>true),
			array('judul', 'length', 'max'=>255),
			array('nm_file', 'length', 'max'=>50),
			array('keterangan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, judul, keterangan, nm_file, id_subject', 'safe', 'on'=>'search'),
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
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'judul' => 'Judul',
			'keterangan' => 'Keterangan',
			'nm_file' => 'Nm File',
			'id_subject' => 'Id Subject',
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
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('nm_file',$this->nm_file,true);
		$criteria->compare('id_subject',$this->id_subject);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Laboratorium the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
