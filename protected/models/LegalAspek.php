<?php

/**
 * This is the model class for table "tm_legal_aspek".
 *
 * The followings are the available columns in table 'tm_legal_aspek':
 * @property integer $id
 * @property string $legal_aspek
 * @property string $nomor
 * @property string $tanggal
 * @property string $tentang
 * @property string $tgl_input
 * @property string $user_input
 * @property string $nm_file
 * @property string $muatan
 */
class LegalAspek extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tm_legal_aspek';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('legal_aspek, nomor', 'length', 'max'=>100),
			array('tentang, muatan', 'length', 'max'=>255),
			array('user_input, nm_file', 'length', 'max'=>50),
			array('tanggal, tgl_input', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, legal_aspek, nomor, tanggal, tentang, tgl_input, user_input, nm_file, muatan', 'safe', 'on'=>'search'),
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
			'legal_aspek' => 'Legal Aspek',
			'nomor' => 'Nomor',
			'tanggal' => 'Tanggal',
			'tentang' => 'Tentang',
			'tgl_input' => 'Tgl Input',
			'user_input' => 'User Input',
			'nm_file' => 'Nm File',
			'muatan' => 'Muatan',
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
		$criteria->compare('legal_aspek',$this->legal_aspek,true);
		$criteria->compare('nomor',$this->nomor,true);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('tentang',$this->tentang,true);
		$criteria->compare('tgl_input',$this->tgl_input,true);
		$criteria->compare('user_input',$this->user_input,true);
		$criteria->compare('nm_file',$this->nm_file,true);
		$criteria->compare('muatan',$this->muatan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return LegalAspek the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
