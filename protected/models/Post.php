<?php

/**
 * This is the model class for table "post".
 *
 * The followings are the available columns in table 'post':
 * @property integer $id_post
 * @property string $created_date
 * @property string $title
 * @property string $description
 * @property string $image
 * @property integer $status
 * @property string $tags
 * @property string $keyword
 * @property string $url 
 * @property integer $views
 * @property integer $likes 
 * @property integer $id_user
 * @property integer $id_category
 * @property integer $id_tag
 */
class Post extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Post the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'post';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_date, title, description, status, id_user, id_category, id_tag', 'required','on'=>'create'),
			array('title, description, status, id_user, id_category, id_tag', 'required','on'=>'update'),
			array('status, views, likes, id_user, id_category', 'numerical', 'integerOnly'=>true),
			array('title, image, tags', 'length', 'max'=>255),
			array('keyword, url', 'length', 'max'=>250),
			array('title','unique'),

			//Validation Image
			array('image', 'required', 'on'=>'changeImage'),
			
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_post, created_date, title, description, image, status, id_user, id_category', 'safe', 'on'=>'search'),
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
			'Member'=>array(self::BELONGS_TO,'User','id_user'),
			'Category'=>array(self::BELONGS_TO,'Category','id_category'),
			'Tag'=>array(self::BELONGS_TO,'Tag','id_tag'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_post' => 'Post ID',
			'created_date' => 'Tanggal',
			'title' => 'Judul',
			'description' => 'Konten',
			'image' => 'Image',
			'status' => 'Tampilkan',
			'views' => 'Views',
			'likes' => 'Likes',
			'tags' => 'Tags',
			'keyword' => 'Keyword',												
			'id_user' => 'Posted By',
			'id_tag' => 'Tag',
			'id_category' => 'Category',
			);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_post',$this->id_post);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('id_category',$this->id_category);
		$criteria->compare('id_tag',$this->id_tag);
		$criteria->order = "created_date DESC";

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	public function findPosts($UserID)
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_post',$UserID);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('id_category',$this->id_category);
		$criteria->compare('id_tag',$this->id_tag);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}	

	protected function beforeSave()
	{
		$this->created_date = date('Y-m-d', strtotime($this->created_date));
		return TRUE;
	}
	
	protected function afterFind()
	{
		$this->created_date = date('d-m-Y', strtotime($this->created_date));
		return TRUE;
	}

	public function status($a)
	{
		if($a==1)
			return "Ya";
		else 
			return "Tidak";
	}	

	public static function getLastPost(){
		$sql = "SELECT * FROM post WHERE status=1 ORDER BY created_date DESC LIMIT 3";
		$command = YII::app()->db->createCommand($sql);
		return $command->queryAll();
	}

	public static function getPopular(){
		$sql = "SELECT * FROM post WHERE status=1 ORDER BY views DESC LIMIT 3";
		$command = YII::app()->db->createCommand($sql);
		return $command->queryAll();
	}

	public static function getRandomPost(){
		$sql = "SELECT post.title as title, post.created_date as created_date, post.image as image, category.name as category, post.views as views, post.url as url FROM post LEFT JOIN category ON post.id_category=category.id_category WHERE post.status=1 ORDER BY RAND() DESC LIMIT 1";
		$command = YII::app()->db->createCommand($sql);
		return $command->queryAll();
	}			   

	public function seo($title){
		return preg_replace('/[^a-z0-9_-]/i', '', strtolower(str_replace(' ', '-', trim($title))));
	}	

	public function thumbSmall($imagefile){
		$image = new EasyImage(Yii::getPathOfAlias('webroot').'/image/news/big/'.$imagefile);
		$image->resize(128, 128);
		$image->save(Yii::getPathOfAlias('webroot').'/image/posting/small/'.$imagefile);
	}

	public function thumbMiddle($imagefile){
		$image = new EasyImage(Yii::getPathOfAlias('webroot').'/image/news/big/'.$imagefile);
		$image->resize(480, 480);
		$image->save(Yii::getPathOfAlias('webroot').'/image/posting/middle/'.$imagefile);
	}

	public function readmore($string){
		if (strlen($string) > 320) {
			$trimstring = substr($string, 0, 320)."...";
		} else {
			$trimstring = $string;
		}
		return $trimstring;
	}					 	

}