<?php

/**
 * This is the model class for table "vehicle".
 *
 * The followings are the available columns in table 'vehicle':
 * @property integer $id
 * @property string $FZJG
 * @property string $hphm
 * @property string $hpzl
 * @property string $cllx
 * @property string $ccdjrq
 * @property string $rlzl
 * @property string $yxgz
 * @property string $hbdbqk
 */
class Vehicle extends CActiveRecord {
	/**
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'vehicle';
	}

	public $verifyCode;

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FZJG, hphm, hpzl, cllx, ccdjrq, rlzl, yxgz, hbdbqk', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, FZJG, hphm, hpzl, cllx, ccdjrq, rlzl, yxgz, hbdbqk', 'safe', 'on' => 'search'),
			array('hphm', 'required', 'message' => '车牌号不能为空'),
			// array('verifyCode','required','message'=>'验证码不能为空'),
			array('verifyCode', 'captcha', 'allowEmpty' => false, 'message' => '验证码不正确'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations() {
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {

		// FZJG、车牌号码(hphm)、号牌种类(hpzl)、车辆类型(cllx)、注册日期(ccdjrq)、燃料(rlzl)、检验有效期止(yxqz)、环保达标情况(hbdbqk)
		return array(
			'id'         => 'ID',
			'FZJG'       => 'Fzjg',
			'hphm'       => '牌号码',
			'hpzl'       => '号牌种类',
			'cllx'       => '车辆类型',
			'ccdjrq'     => '注册日期',
			'rlzl'       => '燃料',
			'yxgz'       => '检验有效期止',
			'hbdbqk'     => '环保达标情况',
			'verifyCode' => '验证码',
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
	public function search() {
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('FZJG', $this->FZJG, true);
		$criteria->compare('hphm', $this->hphm, true);
		$criteria->compare('hpzl', $this->hpzl, true);
		$criteria->compare('cllx', $this->cllx, true);
		$criteria->compare('ccdjrq', $this->ccdjrq, true);
		$criteria->compare('rlzl', $this->rlzl, true);
		$criteria->compare('yxgz', $this->yxgz, true);
		$criteria->compare('hbdbqk', $this->hbdbqk, true);

		return new CActiveDataProvider($this, array(
				'criteria' => $criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Vehicle the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model($className);
	}
}
