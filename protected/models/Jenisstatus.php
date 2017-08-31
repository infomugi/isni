<?php

/**
 * This is the model class for table "tbjenisstatus".
 *
 * The followings are the available columns in table 'tbjenisstatus':
 * @property string $KD_JENISSTATUS
 * @property string $NM_JENISSTATUS
 */
class Jenisstatus extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbjenisstatus';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('KD_JENISSTATUS, NM_JENISSTATUS', 'unique'),
			array('KD_JENISSTATUS, NM_JENISSTATUS', 'required'),
			array('KD_JENISSTATUS', 'length', 'max'=>2),
			array('NM_JENISSTATUS', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('KD_JENISSTATUS, NM_JENISSTATUS', 'safe', 'on'=>'search'),
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
			'KD_JENISSTATUS' => 'Kode Jenis Status',
			'NM_JENISSTATUS' => 'Nama Jenis Status',
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

		$criteria->compare('KD_JENISSTATUS',$this->KD_JENISSTATUS,true);
		$criteria->compare('NM_JENISSTATUS',$this->NM_JENISSTATUS,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return JenisStatus the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
