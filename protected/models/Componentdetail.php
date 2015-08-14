<?php

/**
 * This is the model class for table "inv_componentdetail".
 *
 * The followings are the available columns in table 'inv_componentdetail':
 * @property string $id
 * @property string $fk_componentType
 * @property string $tagNo
 * @property string $serialNo
 * @property string $description
 * @property string $project
 * @property string $fk_supplier
 * @property string $lpoNo
 * @property string $purchaseDate
 * @property string $purchaseValue
 * @property string $deviceStatus
 * @property string $comment
 * @property string $note
 *
 * The followings are the available model relations:
 * @property Componenttype $fkComponentType
 * @property Supplier $fkSupplier
 * @property Issue $issue_device
 */
class Componentdetail extends CActiveRecord
{
	public $issue_device;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'inv_componentdetail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fk_componentType, tagNo, serialNo', 'required'),
			array('fk_componentType, fk_supplier', 'length', 'max'=>4),
			array('tagNo', 'length', 'max'=>10),
			array('serialNo, project', 'length', 'max'=>20),
			array('description', 'length', 'max'=>50),
			array('lpoNo, purchaseValue', 'length', 'max'=>15),
			array('deviceStatus', 'length', 'max'=>9),
			array('comment', 'length', 'max'=>30),
			array('purchaseDate, note', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fk_componentType, tagNo, serialNo, description, project, fk_supplier, lpoNo, purchaseDate, purchaseValue, deviceStatus, comment, note', 'safe', 'on'=>'search'),
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
			'fkComponentType' => array(self::BELONGS_TO, 'Componenttype', 'fk_componentType'),
			'fkSupplier' => array(self::BELONGS_TO, 'Supplier', 'fk_supplier'),			
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fk_componentType' => 'Component Type',
			'tagNo' => 'Tag No',
			'serialNo' => 'Serial No',
			'description' => 'Description',
			'project' => 'Project',
			'fk_supplier' => 'Supplier',
			'lpoNo' => 'LPO No',
			'purchaseDate' => 'Purchase Date',
			'purchaseValue' => 'Purchase Value',
			'deviceStatus' => 'Device Status',
			'comment' => 'Comment',
			'note' => 'Notes',
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
		$criteria->compare('fk_componentType',$this->fk_componentType);
		$criteria->compare('tagNo',$this->tagNo,true);
		$criteria->compare('serialNo',$this->serialNo,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('project',$this->project,true);
		$criteria->compare('fk_supplier',$this->fk_supplier,true);
		$criteria->compare('lpoNo',$this->lpoNo,true);
		$criteria->compare('purchaseDate',$this->purchaseDate,true);
		$criteria->compare('purchaseValue',$this->purchaseValue,true);
		$criteria->compare('deviceStatus',$this->deviceStatus,true);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('note',$this->note,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Componentdetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	
	//Function to get the component type name displayed instead of the id
	public function getComponentTypeName()
	{
		return $this->fkComponentType->name;
	}
	
	//Function to get the supplier name displayed instead of the id
	public function getSupplierName()
	{
		if($this->fkSupplier)
			return $this->fkSupplier->name;
	}
	
	public function setLinks(){
		if($this->deviceStatus=='In Store'){
			return CHtml::link("Issue",array("Issue/create","fk_componentDetail"=>$this->id));
		}else if($this->deviceStatus=='In Use'){
			$criteria = new CDbCriteria();
			$criteria->condition = "fk_componentDetail = " . $this->id;
			$criteria->order = "id desc";
			$criteria->limit = 1;
			$issue = Issue::model()->findAll($criteria);			
			if($issue){
				return CHtml::link("Return",array("Issue/update","id"=>$issue[0]['id']));
			}
		}else{
			return "";
		}}
}
