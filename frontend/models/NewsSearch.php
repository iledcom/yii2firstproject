<?php

namespace frontend\models;

use Yii;

class NewsSearch 
{
	public function simpleSearch($keyword)
	{
		// Простой поиск по сайту
		$sql = "SELECT * FROM news WHERE content LIKE '%$keyword%' LIMIT 20";
		return Yii::$app->db->createCommand($sql)->queryAll();

	}

	public function fulltextSearch($keyword)
	{
		$params = [
			':keyword' => $keyword,
		];
		//Расширенный поиск с применением индексов
		$sql = "SELECT * FROM news WHERE MATCH (content) AGAINST ('$keyword') LIMIT 20";
		return Yii::$app->db->createCommand($sql)->bindValues($params)->queryAll();
	}
}