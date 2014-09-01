<?php

class VehicleController extends Controller {
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout = '//layouts/column1';

	/**
	 * @return array action filters
	 */
	public function filters() {
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules() {
		return array(
			array('allow', // allow all users to perform 'index' and 'view' actions
				'actions' => array('index', 'view', 'search', 'captcha'),
				'users' => array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions' => array('create', 'update'),
				'users' => array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions' => array('admin', 'delete'),
				'users' => array('admin'),
			),
			array('deny', // deny all users
				'users' => array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id) {
		$this->render('view', array(
				'model' => $this->loadModel($id),
			));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate() {
		$model = new Vehicle;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Vehicle'])) {
			$model->attributes = $_POST['Vehicle'];
			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array(
				'model' => $model,
			));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id) {
		$model = $this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Vehicle'])) {
			$model->attributes = $_POST['Vehicle'];
			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
			));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id) {
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if (!isset($_GET['ajax'])) {
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Vehicle');
		$this->render('index', array(
				'dataProvider' => $dataProvider,
			));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin() {
		$model = new Vehicle('search');
		$model->unsetAttributes();// clear any default values
		if (isset($_GET['Vehicle'])) {
			$model->attributes = $_GET['Vehicle'];
		}

		$this->render('admin', array(
				'model' => $model,
			));
	}

	/**
	 * Search all models
	 */
	public function actionSearch() {
		$model = new Vehicle('search');
		$model->unsetAttributes();// clear any default values

		$msg = "";

		if (isset($_GET['Vehicle'])) {
			$model->attributes = $_GET['Vehicle'];
			$v                 = Vehicle::model()->findByAttributes(array('hphm' => $_GET['Vehicle']['hphm']));
			if ($v) {
				$this->redirect(array('view', 'id' => $v->id));

			} else {
				$msg = "未找到记录，请重新查询";
			}
		}

		$this->render('search', array(
				'model' => $model,
				'msg'   => $msg,
			));
	}

	public function actions() {
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha' => array(
				'class'     => 'CCaptchaAction',
				'backColor' => 0xFFFFFF,
				'maxLength' => '4', // 最多生成几个字符
				'minLength' => '4', // 最少生成几个字符
				'height'    => '40',
				'width'     => '100',
			),
		);
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Vehicle the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id) {
		$model = Vehicle::model()->findByPk($id);
		if ($model === null) {
			throw new CHttpException(404, 'The requested page does not exist.');
		}

		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Vehicle $model the model to be validated
	 */
	protected function performAjaxValidation($model) {
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'vehicle-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}