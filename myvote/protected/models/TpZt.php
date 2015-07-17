<?php

/**
 * This is the model class for table "tp_zt".
 *
 * The followings are the available columns in table 'tp_zt':
 * @property integer $id
 * @property string $title
 * @property string $addtime
 * @property string $endtime
 * @property integer $iscookies
 * @property integer $isdl
 * @property integer $isip
 */
class TpZt extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return TpZt the static model class
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
		return 'tp_zt';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('addtime, endtime', 'required'),
			array('iscookies, isdl, isip', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, addtime, endtime, iscookies, isdl, isip', 'safe', 'on'=>'search'),
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
			'title' => 'Title',
			'addtime' => 'Addtime',
			'endtime' => 'Endtime',
			'iscookies' => 'Iscookies',
			'isdl' => 'Isdl',
			'isip' => 'Isip',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('endtime',$this->endtime,true);
		$criteria->compare('iscookies',$this->iscookies);
		$criteria->compare('isdl',$this->isdl);
		$criteria->compare('isip',$this->isip);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
	
	public function getZtlist(){
		$ztlist = TpZt::model()->findAll();
		return CHtml::listData($ztlist,'id','title');
	}
}