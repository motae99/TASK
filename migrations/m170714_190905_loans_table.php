<?php

use yii\db\Migration;
use yii\db\Schema;


class m170714_190905_loans_table extends Migration
{
    public function up()
    {
        $this->createTable('loan', [
            'id' => $this->primaryKey(),
            'amount' => $this->money()->notNull(),
            'purpose' => $this->string()->notNull(),
            'deb_from' => $this->string()->notNull(),
            'created_at' => $this->timestamp(),
            'created_by' => $this->integer()->notNull(),
            'updated_by' => $this->timestamp()->null(),
            'updated_at' => $this->timestamp()->null(),
            'status' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('loan');
    }
}
