<?php

/**
 * This is the model class for table "inv_issue".
 *
 * The followings are the available columns in table 'inv_issue':
 * @property string $id
 * @property string $fk_componentDetail
 * @property string $fk_staff
 * @property string $dateIssued
 * @property string $dateReturned
 * @property string $fk_location
 * @property string $hostname
 *
 * The followings are the available model relations:
 * @property Componentdetail $fkComponentDetail
 */
class Issue extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'inv_issue';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fk_componentDetail', 'required'),
			array('fk_componentDetail', 'length', 'max'=>5),
			array('fk_staff, fk_location', 'length', 'max'=>4),
			array('hostname', 'length', 'max'=>20),
			array('dateIssued, dateReturned', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fk_componentDetail, fk_staff, dateIssued, dateReturned, fk_location, hostname', 'safe', 'on'=>'search'),
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
			'fkComponentDetail' => array(self::BELONGS_TO, 'Componentdetail', 'fk_componentDetail'),
			'fkStaff' => array(self::BELONGS_TO,'Staff','fk_staff'),
			'fkLocation' => array(self::BELONGS_TO,'Location','fk_location'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fk_componentDetail' => 'Component',
			'fk_staff' => 'Staff',
			'dateIssued' => 'Date Issued',
			'dateReturned' => 'Date Returned',
			'fk_location' => 'Location',
			'hostname' => 'Hostname',
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

		$criteria->with=array('fkComponentDetail','fkComponentDetail.fkComponentType');
		$criteria->compare('id',$this->id,true);
		
		$criteria->compare('fk_componentDetail',$this->fk_componentDetail,true);
		$criteria->compare('fk_staff',$this->fk_staff,true);
		$criteria->compare('dateIssued',$this->dateIssued,true);
		$criteria->compare('dateReturned',$this->dateReturned,true);
		$criteria->compare('fk_location',$this->fk_location);
		$criteria->compare('hostname',$this->hostname,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Issue the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	                    
	//Function to get the staff name displayed instead of the id
	public function getStaffName()
	{
		if($this->fkStaff)
			return $this->fkStaff->fullName;
	}
	
	//Function to get the location name displayed instead of the id
	public function getLocationName()
	{
		if($this->fkLocation)
			return $this->fkLocation->name;
	}
	//Function to get the component type name displayed instead of the id
	public function getComponentTag()
	{
		if($this->fkComponentDetail)
		return $this->fkComponentDetail->tagNo;
	}
	

	
}
