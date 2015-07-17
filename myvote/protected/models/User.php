<?php

/**
 * This is the model class for table "_user".
 *
 * The followings are the available columns in table '_user':
 * @property string $id
 * @property string $username
 * @property string $password
 * @property string $realname
 * @property string $tel
 * @property string $sex
 * @property string $class_id
 * @property integer $status_id
 * @property string $create_time
 * @property string $update_time
 * @property string $create_user_id
 * @property string $update_user_id
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password,tel,realname, sex, class_id, status_id','required'),
			array('username', 'length', 'max'=>64),
			array('password', 'length', 'max'=>32),
			array('realname', 'length', 'max'=>32),
			array('tel', 'length', 'max'=>11),
			array('sex', 'length', 'max'=>2),
			array('class_id, create_user_id, update_user_id', 'length', 'max'=>20),
			array('update_time, create_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, realname, tel, sex, class_id, status_id, create_time, update_time, create_user_id, update_user_id', 'safe', 'on'=>'search'),
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
			'username' => 'Username',
			'password' => 'Password',
			'realname' => 'Realname',
			'tel' => 'Tel',
			'sex' => 'Sex',
			'class_id' => 'Class',
			'status_id' => 'Status',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'create_user_id' => 'Create User',
			'update_user_id' => 'Update User',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('realname',$this->realname,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('class_id',$this->class_id,true);
		$criteria->compare('status_id',$this->status_id);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('create_user_id',$this->create_user_id,true);
		$criteria->compare('update_user_id',$this->update_user_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function validatePassword($password)
	{
	    return $this->encrypt($password)===$this->password;
	}
	
	/**
	 * return md5 string of the input one.
	 * @param string $pass
	 */
	public function encrypt($pass)
	{
	    return md5($pass);
	}
	public function beforeSave()
	{
		if(parent::beforeSave()){
			if(!$this->isNewRecord){
				if(!empty($this->passwordagain))
				{
					$this->password=User::model()->encrypt($this->password);
					$this->create_time = date('Y-m-d h:i:s');
					return true;
				}
				return true;
			}else{
				$this->password=User::model()->encrypt($this->password);
				 return true;
			}
	   	}
		return false;
	}
}
