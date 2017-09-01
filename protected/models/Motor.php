<?php

/**
 * This is the model class for table "{{motor}}".
 *
 * The followings are the available columns in table '{{motor}}':
 * @property integer $id
 * @property string $model
 * @property string $cc
 * @property integer $color
 * @property integer $weight
 * @property double $price
 * @property string $image
 * @property string $year
 * @property string $created_at
 */
class Motor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Motor the static model class
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
		return '{{motor}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('model, cc, color, weight, price, year', 'required'),
			array('color, weight', 'numerical', 'integerOnly'=>true),
			array('price', 'numerical'),
			array('model, cc', 'length', 'max'=>256),
			array('image', 'file','types'=>'jpg, gif, png', 'wrongType'=>'Only jpg allowed.', 'allowEmpty'=>false, 'on'=>'insert', 'safe'=>false),
			array('image', 'file','types'=>'jpg, gif, png', 'wrongType'=>'Only jpg allowed.', 'allowEmpty'=>true, 'on'=>'update', 'safe'=>false),
			array('year', 'length', 'max'=>4),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('model, cc, color, weight, price, year, created_at', 'safe', 'on'=>'search'),
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
			'model' => 'Model',
			'cc' => 'Cc',
			'color' => 'Color',
			'weight' => 'Weight',
			'price' => 'Price',
			'image' => 'Image',
			'year' => 'Year',
			'created_at' => 'Created At',
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

		$criteria->compare('model',$this->model,true);
		$criteria->compare('cc',$this->cc,true);
		$criteria->compare('color',$this->color);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('price',$this->price);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('year',$this->year,true);
		$criteria->compare('created_at', $this->created_at, true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
				'pageSize'=>5,
			),
		));
	}


	/**
	 * get list of available colors
	 */
	public static function getColorList()
	{
		return array(
			0 => 'White',
			1 => 'Red',
			2 => 'Yellow',
			3 => 'Black',
			4 => 'Blue',
			5 => 'Green',
			6 => 'Gray'
		);
	}


	/**
	 * get color by it's it
	 */
	public static function getColorById($id)
	{
		switch($id){
			case 0:
				return 'White';
			case 1:
				return 'Red';
			case 2:
				return 'Yellow';
			case 3:
				return 'Black';
			case 4:
				return 'Blue';
			case 5:
				return 'Green';
			case 6:
				return 'Gray';
			default: 
				return 'unknown';
		}
	}


	/**
	 * Set create date of the model
	 */
	protected function beforeSave()
	{
		if (parent::beforeSave())
		{
			if($this->isNewRecord) 
			{
				$this->created_at = date('Y-m-d H:i:s');
			}

			return true;
		}
		
		return false;
	}
}
