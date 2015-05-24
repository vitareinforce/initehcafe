<?php

/**
 * This is the model class for table "frontpage".
 *
 * The followings are the available columns in table 'frontpage':
 * @property integer $id
 * @property string $foodThumbnail
 * @property string $foodDesc
 * @property string $cakesThumbnail
 * @property string $cakesDesc
 * @property string $dessertThumbnail
 * @property string $dessertDesc
 */
class Frontpage extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'frontpage';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('foodThumbnail, foodDesc, cakesThumbnail, cakesDesc, dessertThumbnail, dessertDesc', 'required'),
			array('foodThumbnail, cakesThumbnail, dessertThumbnail', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, foodThumbnail, foodDesc, cakesThumbnail, cakesDesc, dessertThumbnail, dessertDesc', 'safe', 'on'=>'search'),
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
			'foodThumbnail' => 'Food Thumbnail',
			'foodDesc' => 'Food Desc',
			'cakesThumbnail' => 'Cakes Thumbnail',
			'cakesDesc' => 'Cakes Desc',
			'dessertThumbnail' => 'Dessert Thumbnail',
			'dessertDesc' => 'Dessert Desc',
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
		$criteria->compare('foodThumbnail',$this->foodThumbnail,true);
		$criteria->compare('foodDesc',$this->foodDesc,true);
		$criteria->compare('cakesThumbnail',$this->cakesThumbnail,true);
		$criteria->compare('cakesDesc',$this->cakesDesc,true);
		$criteria->compare('dessertThumbnail',$this->dessertThumbnail,true);
		$criteria->compare('dessertDesc',$this->dessertDesc,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Frontpage the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
