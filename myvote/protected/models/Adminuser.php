<?php

/**
 * This is the model class for table "{{adminuser}}".
 *
 * The followings are the available columns in table '{{adminuser}}':
 * @property integer $id
 * @property string $username
 * @property string $password
 */
class Adminuser extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Adminuser the static model class
	 */
	public $passwordagain;
	public $tmpoldpassword;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{adminuser}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username,password','required'),
			array('password', 'compare', 'compareAttribute'=>'passwordagain', 'on'=>'create, updatepass'),
			array('username','unique'),
			array('tmpoldpassword','required','on'=>'updatepass'),
			array('passwordagain','required','on'=>'create,updatepass'),
			//array('tmpoldpassword','compare','compareAttribute'=>'password','on'=>'updatepass'),
			array('username, password', 'length', 'max'=>50),
			array('username,password,passwordagain,tmpoldpassword','safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password', 'safe', 'on'=>'search'),
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
			'username' => '用户名',
			'passwordagain' => '再次输入密码',
			'tmpoldpassword'=>'原密码',
			'password' => '密码',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
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
					$this->password=Adminuser::model()->encrypt($this->password);
					return true;
				}
				return true;
			}else{
				$this->password=Adminuser::model()->encrypt($this->password);
				 return true;
			}
	   	}
		return false;
	}
}