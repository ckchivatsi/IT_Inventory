<?php

/**
 * This is the model class for table "inv_staff".
 *
 * The followings are the available columns in table 'inv_staff':
 * @property string $id
 * @property string $fullName
 * @property string $usrName
 * @property string $email
 * @property string $fk_location
 * @property string $payrollNo
 *
 * The followings are the available model relations:
 * @property Componentdetail[] $componentdetails
 * @property Location $fkLocation
 */
class Staff extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'inv_staff';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fullName, usrName, payrollNo', 'required'),
			array('fullName', 'length', 'max'=>30),
			array('usrName, payrollNo', 'length', 'max'=>15),
			array('email', 'length', 'max'=>35),
			array('fk_location', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fullName, usrName, email, fk_location, payrollNo', 'safe', 'on'=>'search'),
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
			'componentdetails' => array(self::HAS_MANY, 'Componentdetail', 'fk_staff'),
			'fkLocation' => array(self::BELONGS_TO, 'Location', 'fk_location'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fullName' => 'Full Name',
			'usrName' => 'User Name',
			'email' => 'Email',
			'fk_location' => 'Location',
			'payrollNo' => 'Payroll No',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('fullName',$this->fullName,true);
		$criteria->compare('usrName',$this->usrName,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('fk_location',$this->fk_location,true);
		$criteria->compare('payrollNo',$this->payrollNo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Staff the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	//Function to get the location name displayed instead of the id
	public function getLocationName()
	{
		if($this->fkLocation)
			return $this->fkLocation->name;
	}
	
}
