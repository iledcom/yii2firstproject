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
		

		// Аналогичный способ
		// в случае подключения к определенной базе данных достаточно часто

				//Выполнение SQL запросов (содержащих SELECT)

		// queryAll() - возвращает набор строк. каждая строка - это ассоциативный массив с именами столбцов и значений.
		// если выборка ничего не вернёт, то будет получен пустой массив.
		$sql2 = 'SELECT name FROM city;';
		$array2 = Yii::$app->db->createCommand($sql2)->queryAll();
		var_dump($array2);

		// queryOne()- // вернёт одну строку (первую строку)
		// false, если ничего не будет выбрано
		$sql3 = 'SELECT name FROM city;';
		$array3 = Yii::$app->db->createCommand($sql3)->queryOne();
		var_dump($array3);

		// queryColumn() - вернёт один столбец (первый столбец)
		// пустой массив, при отсутствии результата

		$array4 = Yii::$app->db->createCommand($sql3)->queryColumn();
		var_dump($array4);

		// queryScalar() - вернёт скалярное значение
		// или false, при отсутствии результата

		$array5 = Yii::$app->db->createCommand($sql3)->queryScalar();
		var_dump($array5);

				//Выполнение Не-SELECT запросов

		//Метод yii\db\Command::execute() возвращает количество строк обработанных SQL запросом.

		$sql4 = 'DELETE FROM news WHERE id = 77;';
		$result1 = Yii::$app->db->createCommand($sql4)->execute();
		var_dump($result1);

		return $this->render('index');
	}
}