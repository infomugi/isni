<?php

/**
 * This is the model class for table "portfolio".
 *
 * The followings are the available columns in table 'portfolio':
 * @property integer $id_portfolio
 * @property string $name
 * @property string $description
 * @property string $image
 * @property integer $category_id
 * @property integer $status
 */
class Portfolio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'portfolio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, description, image, category_id, status', 'required'),
			array('image', 'required','on'=>'image'),
			array('category_id, status', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>150),
			array('image', 'length', 'max'=>255),
			array('name','unique'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_portfolio, name, description, image, category_id, status', 'safe', 'on'=>'search'),
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
			'Category'=>array(self::BELONGS_TO,'Category','category_id'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_portfolio' => 'Id Foto',
			'name' => 'Kegiatan',
			'description' => 'Deskripsi',
			'image' => 'Gambar',
			'category_id' => 'Kategori',
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

		$criteria->compare('id_portfolio',$this->id_portfolio);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Portfolio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public static function getFoto(){
		$sql = "SELECT portfolio.*, category_sub.name as tag FROM portfolio 
		LEFT JOIN category_sub ON portfolio.category_id=category_sub.id_category_sub
		WHERE portfolio.status=1 ORDER BY portfolio.id_portfolio DESC LIMIT 12 ";
		$command = YII::app()->db->createCommand($sql);
		return $command->queryAll();
	}		
}
