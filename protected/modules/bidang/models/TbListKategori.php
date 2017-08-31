<?php

/**
 * This is the model class for table "tb_list_kategori".
 *
 * The followings are the available columns in table 'tb_list_kategori':
 * @property string $KD_LIST_KATEGORI
 * @property string $NM_LIST_KATEGORI1
 * @property string $NM_LIST_KATEGORI2
 * @property string $kd_bidang
 */
class TbListKategori extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_list_kategori';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('KD_LIST_KATEGORI', 'required'),
			array('KD_LIST_KATEGORI', 'length', 'max'=>5),
			array('NM_LIST_KATEGORI1, NM_LIST_KATEGORI2', 'length', 'max'=>100),
			array('kd_bidang', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('KD_LIST_KATEGORI, NM_LIST_KATEGORI1, NM_LIST_KATEGORI2, kd_bidang', 'safe', 'on'=>'search'),
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
			'KD_LIST_KATEGORI' => 'Kd List Kategori',
			'NM_LIST_KATEGORI1' => 'Nm List Kategori1',
			'NM_LIST_KATEGORI2' => 'Nm List Kategori2',
			'kd_bidang' => 'Kd Bidang',
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

		$criteria->compare('KD_LIST_KATEGORI',$this->KD_LIST_KATEGORI,true);
		$criteria->compare('NM_LIST_KATEGORI1',$this->NM_LIST_KATEGORI1,true);
		$criteria->compare('NM_LIST_KATEGORI2',$this->NM_LIST_KATEGORI2,true);
		$criteria->compare('kd_bidang',$this->kd_bidang,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TbListKategori the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
