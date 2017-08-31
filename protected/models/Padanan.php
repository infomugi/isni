<?php

/**
 * This is the model class for table "tb_padanan".
 *
 * The followings are the available columns in table 'tb_padanan':
 * @property string $KD_PADANAN
 * @property string $NO_PADANAN
 * @property string $DESKRIPSI
 */
class Padanan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_padanan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('KD_PADANAN', 'required'),
			array('KD_PADANAN', 'unique'),
			array('KD_PADANAN', 'length', 'max'=>5),
			array('NO_PADANAN', 'length', 'max'=>100),
			array('DESKRIPSI', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('KD_PADANAN, NO_PADANAN, DESKRIPSI', 'safe', 'on'=>'search'),
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
			'KD_PADANAN' => 'Kode Padanan',
			'NO_PADANAN' => 'Nomor Padanan',
			'DESKRIPSI' => 'Deskripsi',
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

		$criteria->compare('KD_PADANAN',$this->KD_PADANAN,true);
		$criteria->compare('NO_PADANAN',$this->NO_PADANAN,true);
		$criteria->compare('DESKRIPSI',$this->DESKRIPSI,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TbPadanan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
