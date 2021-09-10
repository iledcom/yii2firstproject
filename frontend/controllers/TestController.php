<?php
namespace frontend\controllers;

use Yii;
use Faker\Factory;
use yii\web\Controller;
use frontend\models\News;


class TestController extends Controller {

	public function actionGenerate()
	{
		/*
			for ($i = 0; $i < 100; $i++) {
		
			$faker = Factory::create();
			$newsItem = new News();

			$newsItem->title = $faker->text(35);
			$newsItem->content = $faker->text(rand(1000, 2000));
			$newsItem->status = rand(0, 1);

			$newsItem->save();
		}

		*/
			//если надо вставить 10000 записей
		$faker = Factory::create();
		
		for ($j = 0; $j < 100; $j++) {
			$news = [];
			for ($i = 0; $i < 100; $i++) {
				$news[] = [$faker->text(rand(30, 45)), $faker->text(rand(2000, 3000)), rand(0, 1)];
			}
			Yii::$app->db->createCommand()->batchInsert('news', ['title', 'content', 'status'], $news)->execute();
		}
	}
}