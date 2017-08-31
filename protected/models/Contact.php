<?php

/**
 * This is the model class for table "contact".
 *
 * The followings are the available columns in table 'contact':
 * @property integer $id_contact
 * @property string $created_date
 * @property string $fullname
 * @property string $email
 * @property string $title
 * @property string $description
 * @property integer $view
 * @property integer $status
 */
class Contact extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contact';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_date, fullname, email, title, description, view, status', 'required'),
			array('view, status', 'numerical', 'integerOnly'=>true),
			array('fullname', 'length', 'max'=>25),
			array('email', 'length', 'max'=>50),
			array('title', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_contact, created_date, fullname, email, title, description, view, status', 'safe', 'on'=>'search'),
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
			'id_contact' => 'Id Contact',
			'created_date' => 'Created Date',
			'fullname' => 'Fullname',
			'email' => 'Email',
			'title' => 'Title',
			'description' => 'Description',
			'view' => 'View',
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

		$criteria->compare('id_contact',$this->id_contact);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('view',$this->view);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contact the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function status($data){
		if($data==1){
			return "Inbox";
		}else if($data==2){
			return "Important";
		}else{
			return "New";
		}
	}

	public function view($data){
		if($data==1){
			return "Read";
		}else{
			return "Unread";
		}
	}	

	public static function getUnreadCountMessage(){
		$sql = "SELECT COUNT(id_contact) FROM contact WHERE view=0";
		return Yii::app()->db->createCommand($sql)->queryScalar();
	}		

	public static function getReadCountMessage(){
		$sql = "SELECT COUNT(id_contact) FROM contact WHERE view=1";
		return Yii::app()->db->createCommand($sql)->queryScalar();
	}				
}
