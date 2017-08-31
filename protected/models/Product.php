<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property integer $id_product
 * @property string $code
 * @property string $name
 * @property string $description
 * @property integer $category_id
 * @property integer $sub_category_id
 * @property integer $image
 * @property integer $price 
 * @property integer $color
 * @property integer $status
 * @property integer $stock
 * @property string $spesification
 * @property integer $weight
 * @property integer $brand_id
 * @property integer $views
 * @property integer $likes
 * @property integer $discount
 * @property integer $created_id
 * @property integer $update_id
 * @property integer $created_date
 * @property integer $update_date
 * @property string $keyword
 * @property string $abstrack
 * @property integer $sales
 * @property integer $rate
 * @property integer $callus
 * @property string $url
 */
class Product extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, description, category_id, sub_category_id, views, likes, created_id, update_id, created_date, update_date, sales, rate, image, brand_id, price', 'required'),
			array('category_id, sub_category_id, color, status, stock, brand_id, views, likes, discount, created_id, update_id, sales, rate', 'numerical', 'integerOnly'=>true),
			array('weight, callus', 'numerical'),
			array('code', 'length', 'max'=>50),
			array('name, abstrack, image, url', 'length', 'max'=>255),
			array('description, spesification', 'length', 'max'=>255),
			array('keyword', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_product, code, name, description, category_id, sub_category_id, color, status, stock, spesification, weight, brand_id, price, views, likes, discount, created_id, update_id, created_date, update_date, keyword, abstrack, sales, rate', 'safe', 'on'=>'search'),
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
			'Tag'=>array(self::BELONGS_TO,'Tag','sub_category_id'),
			'Created'=>array(self::BELONGS_TO,'User','created_id'),
			'Update'=>array(self::BELONGS_TO,'User','update_id'),
			'Brand'=>array(self::BELONGS_TO,'Client','brand_id'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_product' => 'Id Product',
			'code' => 'Kode',
			'name' => 'Nama',
			'description' => 'Keterangan',
			'category_id' => 'Kategori',
			'sub_category_id' => 'Tag',
			'price' => 'Harga',
			'color' => 'Warna',
			'status' => 'Status',
			'stock' => 'Stock',
			'spesification' => 'Spesifikasi',
			'weight' => 'Berat',
			'brand_id' => 'Merk',
			'views' => 'Views',
			'likes' => 'Likes',
			'discount' => 'Discount',
			'created_id' => 'Created',
			'update_id' => 'Update',
			'created_date' => 'Created Date',
			'update_date' => 'Update Date',
			'keyword' => 'Keyword',
			'abstrack' => 'Abstrack',
			'sales' => 'Sales',
			'rate' => 'Rating',
			'callus' => 'Harga Call US',
			'url' => 'URL',
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

		$criteria->compare('id_product',$this->id_product);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('sub_category_id',$this->sub_category_id);
		$criteria->compare('price',$this->price);
		$criteria->compare('color',$this->color);
		$criteria->compare('status',$this->status);
		$criteria->compare('stock',$this->stock);
		$criteria->compare('spesification',$this->spesification,true);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('brand_id',$this->brand_id);
		$criteria->compare('views',$this->views);
		$criteria->compare('likes',$this->likes);
		$criteria->compare('discount',$this->discount);
		$criteria->compare('created_id',$this->created_id);
		$criteria->compare('update_id',$this->update_id);
		$criteria->compare('created_date',$this->created_date);
		$criteria->compare('update_date',$this->update_date);
		$criteria->compare('keyword',$this->keyword,true);
		$criteria->compare('abstrack',$this->abstrack,true);
		$criteria->compare('sales',$this->sales);
		$criteria->compare('rate',$this->rate);
		$criteria->compare('callus',$this->callus);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	public function getProduk($id)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_product',$this->id_product);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('category_id',$id);
		$criteria->compare('sub_category_id',$this->sub_category_id);
		$criteria->compare('price',$this->price);
		$criteria->compare('color',$this->color);
		$criteria->compare('status',$this->status);
		$criteria->compare('stock',$this->stock);
		$criteria->compare('spesification',$this->spesification,true);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('brand_id',$this->brand_id);
		$criteria->compare('views',$this->views);
		$criteria->compare('likes',$this->likes);
		$criteria->compare('discount',$this->discount);
		$criteria->compare('created_id',$this->created_id);
		$criteria->compare('update_id',$this->update_id);
		$criteria->compare('created_date',$this->created_date);
		$criteria->compare('update_date',$this->update_date);
		$criteria->compare('keyword',$this->keyword,true);
		$criteria->compare('abstrack',$this->abstrack,true);
		$criteria->compare('sales',$this->sales);
		$criteria->compare('rate',$this->rate);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function seo($title){
		return preg_replace('/[^a-z0-9_-]/i', '', strtolower(str_replace(' ', '-', trim($title))));
	}		

	public function color($data){
		if($data==1){
			return "Putih";
		}else if($data==2){
			return "Merah";
		}else if($data==3){
			return "Biru";
		}else if($data==4){
			return "Hijau";
		}else if($data==5){
			return "Kuning";
		}else if($data==6){
			return "Cokelat";
		}else{
			return "Hitam";
		}
	}

	public function status($data){
		if($data==1){
			return "New";
		}else if($data==2){
			return "Sale";
		}else{
			return "Sold";
		}
	}

	public function callus($data){
		if($data==1){
			return "Call US for Price";
		}else{
			return "Call US for Price";
		}
	}		

	public function available($data){
		if($data==1 || $data==2){
			return "in-stock";
		}else{
			return "out-of-stock";
		}
	}

	public static function getLastest(){
		$sql = "SELECT * FROM product ORDER BY created_date DESC LIMIT 6 ";
		$command = YII::app()->db->createCommand($sql);
		return $command->queryAll();
	}	

	public static function getPopular(){
		$sql = "SELECT * FROM product ORDER BY views DESC LIMIT 6 ";
		$command = YII::app()->db->createCommand($sql);
		return $command->queryAll();
	}	

	public static function getBestseller(){
		$sql = "SELECT * FROM product ORDER BY views DESC LIMIT 3 ";
		$command = YII::app()->db->createCommand($sql);
		return $command->queryAll();
	}			

	public static function getFavorite(){
		$sql = "SELECT * FROM product ORDER BY likes DESC LIMIT 6 ";
		$command = YII::app()->db->createCommand($sql);
		return $command->queryAll();
	}

	public static function getCategory($data){
		$sql = "
		SELECT product.status as status, product.image as image, product.name as name, product.id_product as id_product, product.price as price, product.discount as discount, product.callus as callus  
		FROM product LEFT JOIN category 
		ON product.category_id=category.id_category 
		WHERE product.category_id=".$data." 
		ORDER BY product.likes DESC LIMIT 6 ";
		
		$command = YII::app()->db->createCommand($sql);
		return $command->queryAll();
	}	

	public static function rupiah($data){
		return Yii::app()->numberFormatter->format("Rp ###,###,###", $data);
	}

	public static function discount($data){
		$product = self::model()->findByPk($data);
		$discountprice = $product->price * $product->discount / 100;
		return $discountprice;
	}	

	public static function realPrice($data){
		$product = self::model()->findByPk($data);
		$price = $product->price - self::model()->discount($product->id_product);
		return $price;
	}		

	public function readmore($string){
		if (strlen($string) > 160) {
			$trimstring = substr($string, 0, 160)."...";
		} else {
			$trimstring = $string;
		}
		return $trimstring;
	}

	public static function getLastestProduct(){
		$sql = "
		SELECT product.image as image, product.name as name, client.name as brand,
		category.name as category, category_sub.name as tag, product.url as url, product.price as price
		FROM product LEFT JOIN client ON product.brand_id=client.id_client 
		LEFT JOIN category ON product.category_id=category.id_category
		LEFT JOIN category_sub ON product.sub_category_id=category_sub.id_category_sub
		ORDER BY created_date DESC LIMIT 4 ";
		$command = YII::app()->db->createCommand($sql);
		return $command->queryAll();
	}		
}
