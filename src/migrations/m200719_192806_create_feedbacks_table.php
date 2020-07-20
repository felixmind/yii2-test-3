<?php

use yii\db\Migration;

/**
 * Handles the creation of table `feedbacks`.
 */
class m200719_192806_create_feedbacks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('feedbacks', [
            'id'       => $this->primaryKey(),
            'customer' => $this->string(),
            'phone'    => $this->string(),
            'status'   => $this->tinyInteger(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('feedbacks');
    }
}
