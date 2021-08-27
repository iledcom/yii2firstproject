<?php

namespace frontend\controllers;

use Yii;

use frontend\models\Book;

class BookshopController extends \yii\web\Controller
{
    public function actionIndex()
    {
        //$query = Book::find();
        //$query->where(['publisher_id' => 1]);
        //$query->orderBy('date_published');
        //$query->limit(2);
        //$bookList = $query->all();
        // используем цепочки, чтобы оптимизировать код

        $conditions = ['publisher_id' => 1];
        //$bookList = Book::find()->where($conditions)->orderBy('date_published')->limit(2)->all();

        $bookList = Book::find()->orderBy('date_published')->limit(20)->all();

        return $this->render('index', [
            'bookList' => $bookList,
        ]);
    }

    public function actionCreate() {

        $book = new Book();

        if($book->load(Yii::$app->request->post()) && $book->save()) {
            Yii::$app->session->setFlash('success', 'Saved!');
            return $this->redirect(['bookshop/index']);
            //return $this->refresh(); // Обновление страницы с потерей данных формы
        }

        return $this->render('create', [
            'book' => $book,
        ]);
    }

}
