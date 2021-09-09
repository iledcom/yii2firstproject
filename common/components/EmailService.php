<?php

namespace common\components;

use Yii;
use yii\base\Component;
use common\components\UserNotificationInterface;

class EmailService extends Component
{

	public function notifyUser(UserNotificationInterface $event)
	{
		return Yii::$app->mailer->compose() 
			->setFrom('test.konkore@gmail.com')
			->setTo($event->getEmail())
			->setSubject($event->getSubject())
			->send();
	}

	public function notifyAdmins(UserNotificationInterface $event)
	{
		return Yii::$app->mailer->compose() 
			->setFrom('test.konkore@gmail.com')
			->setTo('korenev@iled.com.ua')
			->setSubject($event->getSubject())
			->send();
	}

}