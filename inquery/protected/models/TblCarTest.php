<?php

/**
 * This is the model class for table "tbl_car_test".
 *
 * The followings are the available columns in table 'tbl_car_test':
 * @property integer $id
 * @property string $xh
 * @property string $hphm
 * @property string $cllx
 * @property string $rlzl
 * @property string $ccdjrq
 * @property string $jcrq
 * @property string $jcjg
 * @property string $jcff
 * @property string $jccs
 */
class TblCarTest extends CActiveRecord {
	/**
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'tbl_car_test';
	}

	public $verifyCode;

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('xh, hphm, cllx, rlzl, ccdjrq, jcrq, jcjg, jcff, jccs,jc_result', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, xh, hphm, cllx, rlzl, ccdjrq, jcrq, jcjg, jcff, jccs,jc_result', 'safe', 'on' => 'search'),
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
		return array(
			'id'         => 'ID',
			'xh'         => '序号',
			'hphm'       => '车牌号码',
			'cllx'       => '车辆类型',
			'rlzl'       => '燃料',
			'ccdjrq'     => '注册日期',
			'jcrq'       => '检测日期',
			'jcjg'       => '检测机构',
			'jcff'       => '检测方法',
			'jccs'       => '检测次数',
			'jc_result'  => '检测结果',
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
		$criteria->compare('xh', $this->xh, true);
		$criteria->compare('hphm', $this->hphm, true);
		$criteria->compare('cllx', $this->cllx, true);
		$criteria->compare('rlzl', $this->rlzl, true);
		$criteria->compare('ccdjrq', $this->ccdjrq, true);
		$criteria->compare('jcrq', $this->jcrq, true);
		$criteria->compare('jcjg', $this->jcjg, true);
		$criteria->compare('jcff', $this->jcff, true);
		$criteria->compare('jccs', $this->jccs, true);
		$criteria->compare('jc_result', $this->jc_result, true);

		return new CActiveDataProvider($this, array(
				'criteria' => $criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblCarTest the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model($className);
	}
}
