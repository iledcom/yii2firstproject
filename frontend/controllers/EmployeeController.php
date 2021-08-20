<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Employee;

class EmployeeController extends Controller {

	public function actionIndex() {
		$employee1 = new Employee();
		$employee1->firstName = 'Alex';
		$employee1->lastName = 'Smith';
		$employee1->middleName = 'John';
		$employee1->salary = 1000;
	}

	public function actionRegister() {
		$model = new Employee();
		$model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;

		if ($model->load(Yii::$app->request->post())) {

			//Массовое присвоение
			$model->attributes = $formData;

			if ($model->validate() && $model->save()) {
				Yii::$app->session->setFlash('success', 'Registered!');
			}
		}

		return $this->render('register', [
			'model' => $model,
		]);
	}

	public function actionUpdate() {
		$model = new Employee();
		$model->scenario = Employee::SCENARIO_EMPLOYEE_UPDATE;

		$formData = Yii::$app->request->post();

		if (Yii::$app->request->isPost) {

			//Массовое присвоение
			$model->attributes = $formData;

			if ($model->validate() && $model->save()) {
				Yii::$app->session->setFlash('success', 'Data updated!');
			}
		}

		return $this->render('update', [
			'model' => $model,
		]);
	}
}