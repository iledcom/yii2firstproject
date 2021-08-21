<?php

namespace frontend\controllers;

use yii;
use yii\web\Controller;


class DaoController extends Controller {

	public function actionIndex() {
		$db = new \yii\db\Connection([
	    'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
	    'username' => 'remote',
	    'password' => '222222',
	    'charset' => 'utf8mb4',
		]);

		$sql = 'SELECT * FROM city;';
		$command = new \yii\db\Command([
			'db' => $db,
			'sql' => $sql,
		]);

		$arrayWhithRethalts = $command->queryAll();

		// $array2 = Yii::$app->db->createCommand($sql)->queryAll(); Аналогичный способ

		var_dump($arrayWhithRethalts);
		

		return $this->render('index');
	}
}