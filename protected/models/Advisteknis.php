<?php

/**
 * This is the model class for table "tm_advis_teknis".
 *
 * The followings are the available columns in table 'tm_advis_teknis':
 * @property integer $id
 * @property string $nm_advis_teknis
 * @property string $keterangan
 * @property string $nm_file
 */
class Advisteknis extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tm_advis_teknis';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nm_advis_teknis, keterangan', 'required'),
			array('nm_advis_teknis', 'length', 'max'=>255),
			array('nm_file', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nm_advis_teknis, keterangan, nm_file', 'safe', 'on'=>'search'),
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
			'nm_advis_teknis' => 'Nama Advis Teknis',
			'keterangan' => 'Keterangan',
			'nm_file' => 'Nama File',
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
		$criteria->compare('nm_advis_teknis',$this->nm_advis_teknis,true);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('nm_file',$this->nm_file,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AdvisTeknis the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
