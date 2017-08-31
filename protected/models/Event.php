<?php

/**
 * This is the model class for table "event".
 *
 * The followings are the available columns in table 'event':
 * @property integer $id_event
 * @property string $created_date
 * @property string $name
 * @property string $description
 * @property string $start_date
 * @property string $end_date
 * @property string $time
 * @property string $location
 * @property string $image
 * @property integer $status
 */
class Event extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'event';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_date, name, description, start_date, end_date, time, location, status', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('name, image', 'length', 'max'=>255),
			array('start_date, end_date', 'length', 'max'=>15),
			array('time', 'length', 'max'=>25),
			array('location', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_event, created_date, name, description, start_date, end_date, time, location, image, status', 'safe', 'on'=>'search'),
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
			'id_event' => 'Kode Event',
			'created_date' => 'Tanggal',
			'name' => 'Kegiatan',
			'description' => 'Deskripsi',
			'date' => 'Tanggal',
			'start_date' => 'Tanggal Mulai',
			'end_date' => 'Tanggal Berakhir',
			'time' => 'Jam',
			'location' => 'Lokasi',
			'image' => 'Gambar',
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

		$criteria->compare('id_event',$this->id_event);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('time',$this->time,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Event the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	// protected function beforeSave()
	// {
	// 	$this->start_date = date('Y-m-d', strtotime($this->start_date));
	// 	$this->end_date = date('Y-m-d', strtotime($this->end_date));
	// 	return TRUE;
	// }
	
	// protected function afterFind()
	// {
	// 	$this->start_date = date('d-m-Y', strtotime($this->start_date));
	// 	$this->end_date = date('d-m-Y', strtotime($this->end_date));
	// 	return TRUE;
	// }

}
