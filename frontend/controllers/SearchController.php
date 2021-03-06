<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\forms\SearchForm;

class SearchController extends Controller
{
    public function actionIndex()
    {
        $model = new SearchForm();

        $results = null;

        if($model->load(Yii::$app->request->post())) {
            $results = $model->search();

        }
        return $this->render('index', [
            'model' => $model,
            'results' => $results,
        ]);
    }

}
