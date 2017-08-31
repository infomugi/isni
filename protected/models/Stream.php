<?php

/**
 * This is the model class for table "stream".
 *
 * The followings are the available columns in table 'stream':
 * @property integer $id_stream
 * @property integer $id_user
 * @property string $created_date
 * @property string $name
 * @property string $description
 * @property string $image
 * @property string $url
 * @property integer $type
 * @property integer $status
 */
class Stream extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'stream';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, description, image, url, type, status, id_user', 'required','on'=>'create'),
			array('image', 'required','on'=>'image'),
			array('type, status', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>150),
			array('image, url, created_date', 'length', 'max'=>255),
			// array('url','url'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_stream, name, description, image, url, type, status', 'safe', 'on'=>'search'),
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
			'Member'=>array(self::BELONGS_TO,'Users','id_user'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_stream' => 'Stream ID',
			'id_user' => 'Petugas',
			'created_date' => 'Tanggal Posting',
			'name' => 'Judul Video',
			'description' => 'Deskripsi',
			'image' => 'Image',
			'url' => 'Alamat Video',
			'type' => 'Tipe',
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

		$criteria->compare('id_stream',$this->id_stream);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Stream the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function status($data){
		if($data==1){
			return "CCTV Stream";
		}else{
			return "Video Youtube";
		}
	}

	public function thumbSmall($imagefile){
		$image = new EasyImage(Yii::getPathOfAlias('webroot').'/image/stream/big/'.$imagefile);
		$image->resize(128, 128);
		$image->save(Yii::getPathOfAlias('webroot').'/image/stream/small/'.$imagefile);
	}

	public function thumbMiddle($imagefile){
		$image = new EasyImage(Yii::getPathOfAlias('webroot').'/image/stream/big/'.$imagefile);
		$image->resize(480, 480);
		$image->save(Yii::getPathOfAlias('webroot').'/image/stream/middle/'.$imagefile);
	}	

	public static function getVideo(){
		$sql = "SELECT * FROM stream WHERE status=1 AND type=2 LIMIT 15";
		$command = YII::app()->db->createCommand($sql);
		return $command->queryAll();
	}			
}
