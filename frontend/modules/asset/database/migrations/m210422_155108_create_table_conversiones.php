<?php

namespace frontend\modules\asset\database\migrations;
use console\migrations\baseMigration;
class m210422_155108_create_table_conversiones extends baseMigration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210422_155108_create_table_conversiones cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210422_155108_create_table_conversiones cannot be reverted.\n";

        return false;
    }
    */
}
