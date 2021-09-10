<?php

namespace frontend\models;

use Yii;

class NewsSearch 
{
	public function simpleSearch($keyword)
	{
		$sql = "SELECT * FROM news WHERE content LIKE '%$keyword%' LIMIT 20";
		return Yii::$app->db->createCommand($sql)->queryAll();

	}
}