<?php

/**
 * This is the model class for table "tbfaq".
 *
 * The followings are the available columns in table 'tbfaq':
 * @property string $ID_FAQ
 * @property string $TANYA
 * @property string $JAWAB
 * @property string $USER_ID
 * @property string $TGLBUAT
 * @property string $URL_GBR
 * @property string $KET_GBR
 */
class Faq extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbfaq';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TANYA, JAWAB, USER_ID, TGLBUAT', 'required'),
			array('TANYA, JAWAB', 'length', 'max'=>255),
			array('USER_ID', 'length', 'max'=>5),
			array('URL_GBR, KET_GBR', 'length', 'max'=>100),
			array('TGLBUAT', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_FAQ, TANYA, JAWAB, USER_ID, TGLBUAT, URL_GBR, KET_GBR', 'safe', 'on'=>'search'),
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
			'ID_FAQ' => 'Id Faq',
			'TANYA' => 'Tanya',
			'JAWAB' => 'Jawab',
			'USER_ID' => 'User',
			'TGLBUAT' => 'Tanggal Buat',
			'URL_GBR' => 'Url Gambar',
			'KET_GBR' => 'Ket Gambar',
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

		$criteria->compare('ID_FAQ',$this->ID_FAQ,true);
		$criteria->compare('TANYA',$this->TANYA,true);
		$criteria->compare('JAWAB',$this->JAWAB,true);
		$criteria->compare('USER_ID',$this->USER_ID,true);
		$criteria->compare('TGLBUAT',$this->TGLBUAT,true);
		$criteria->compare('URL_GBR',$this->URL_GBR,true);
		$criteria->compare('KET_GBR',$this->KET_GBR,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Faq the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
