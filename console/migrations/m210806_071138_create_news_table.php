<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m210806_071138_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'content' => $this->text(),
            'status' => $this->integer(3),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() //Отмена миграции
    {
        $this->dropTable('{{%news}}');
    }
}
