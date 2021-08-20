<?php
namespace frontend\controllers;

use frontend\models\Test;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;



class TestController extends Controller {

	public function actionIndex() {

		$max = Yii::$app->params['maxNewsInList'];

		$list = Test::getNewsList($max);

		return $this->render('index', [
			'list' => $list,
		]);

	}

	public function actionView($id) {
		
		$item = Test::getItem($id);

		return $this->render('view', [
			'item' => $item
		]);
	}

	public function actionMail() {
		$result = Yii::$app->mailer->compose()
    ->setFrom('test.konkore@gmail.com')
    ->setTo('korenev@iled.com.ua')
    ->setSubject('Тема сообщения')
    ->setTextBody('Текст сообщения')
    ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
    ->send();
  var_dump($result);
  die;
	}
}