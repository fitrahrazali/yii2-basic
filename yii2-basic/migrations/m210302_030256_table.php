<?php

use yii\db\Migration;

/**
 * Class m210302_030256_table
 */
class m210302_030256_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%parts}}', [

            'id'        => $this->primaryKey(),
            'name'      => $this->string(),
            'full_name' => $this->string(),
            'quantity'  => $this->integer()->defaultValue(1),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210302_030256_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210302_030256_table cannot be reverted.\n";

        return false;
    }
    */
}
