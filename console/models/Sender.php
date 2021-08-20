<?php

namespace console\models;

use Yii;

class Sender {
	public static function run($subscribers, $newsList){
		
		foreach ($subscribers as $subscriber) {
					
			$result = Yii::$app->mailer->compose('/mailer/newslist', [
				'newsList' => $newsList,
			])
		    ->setFrom('test.konkore@gmail.com')
		    ->setTo($subscriber['email'])
		    ->setSubject('Тема сообщения')
	    	->send();
	  	var_dump($result);
  	}

	}


}