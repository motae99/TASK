<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `tokens`.
 */
class m170711_155203_create_tokens_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('token', [
            'id' => 'pk',
            'token_id' => Schema::TYPE_TEXT . ' NOT NULL',
            'role' => Schema::TYPE_STRING . ' NOT NULL',
            
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tokens');
    }
}
