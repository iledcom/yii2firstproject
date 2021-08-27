<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "book_to_author".
 *
 * @property int $id
 * @property int|null $book_id
 * @property int|null $author_id
 */
class BookToAuthor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book_to_author';
    }

}
