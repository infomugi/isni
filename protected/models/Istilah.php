<?php

/**
 * This is the model class for table "tb_istilah".
 *
 * The followings are the available columns in table 'tb_istilah':
 * @property integer $id_istilah
 * @property string $istilah
 * @property string $definisi
 * @property string $id_bidang
 * @property string $no_id
 */
class Istilah extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_istilah';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('istilah, definisi, id_bidang', 'required'),
			array('istilah, definisi', 'length', 'max'=>255),
			array('id_bidang, no_id', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_istilah, istilah, definisi, id_bidang, no_id', 'safe', 'on'=>'search'),
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
			'Bidang'=>array(self::BELONGS_TO,'Bidang','id_bidang'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_istilah' => 'Id Istilah',
			'istilah' => 'Istilah',
			'definisi' => 'Definisi',
			'id_bidang' => 'Bidang',
			'no_id' => 'No',
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

		$criteria->compare('id_istilah',$this->id_istilah);
		$criteria->compare('istilah',$this->istilah,true);
		$criteria->compare('definisi',$this->definisi,true);
		$criteria->compare('id_bidang',$this->id_bidang,true);
		$criteria->compare('no_id',$this->no_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Istilah the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
