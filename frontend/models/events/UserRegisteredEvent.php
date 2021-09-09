<?php

namespace frontend\models\events;

use yii\base\Event;
use frontend\models\User;
use common\components\UserNotificationInterface;

class UserRegisteredEvent extends Event implements UserNotificationInterface
{
	public $user;
	public $subject;

	public function getSubject()
	{
		return $this->subject;
	}

	public function getEmail() 
	{
		return $this->user->email;
	}

}