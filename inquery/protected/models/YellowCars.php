<?php

/**
 * This is the model class for table "tbl_yellow_cars".
 *
 * The followings are the available columns in table 'tbl_yellow_cars':
 * @property integer $id
 * @property string $FZJG
 * @property string $car_id
 * @property string $plate_type
 * @property string $car_type
 * @property string $use_type
 * @property string $reg_date
 * @property string $oil
 * @property string $valid_expire_date
 * @property string $Manufacture_date
 */
class YellowCars extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */

	public $verifyCode;

	public function tableName()
	{
		return 'tbl_yellow_cars';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FZJG, car_id, plate_type, car_type, use_type, reg_date, oil, valid_expire_date, Manufacture_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('car_id, plate_type, car_type, ', 'safe', 'on'=>'search'),
            array('car_id','required','message'=>'车牌号不能为空'),
            // array('verifyCode','required','message'=>'验证码不能为空'),
            array('verifyCode', 'captcha', 'allowEmpty'=>false,'message'=>'验证码不正确'),

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
			'FZJG' => 'Fzjg',
			'car_id' => '车牌号码',
			'plate_type' => '号牌种类',
			'car_type' => '车辆类型',
			'use_type' => '使用性质',
			'reg_date' => '注册日期',
			'oil' => '燃料',
			'valid_expire_date' => '检验有效期止',
			'Manufacture_date' => '出厂日期',
			'verifyCode'=>'验证码',
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
		$criteria->compare('FZJG',$this->FZJG,true);
		$criteria->compare('car_id',$this->car_id,true);
		$criteria->compare('plate_type',$this->plate_type,true);
		$criteria->compare('car_type',$this->car_type,true);
		$criteria->compare('use_type',$this->use_type,true);
		$criteria->compare('reg_date',$this->reg_date,true);
		$criteria->compare('oil',$this->oil,true);
		$criteria->compare('valid_expire_date',$this->valid_expire_date,true);
		$criteria->compare('Manufacture_date',$this->Manufacture_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return YellowCars the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
