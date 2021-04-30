<?php
namespace frontend\modules\asset\database\migrations;
use console\migrations\baseMigration;
class m210423_152705_create_table_desig_code extends baseMigration
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
        echo "m210423_152705_create_table_desig_code cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210423_152705_create_table_desig_code cannot be reverted.\n";

        return false;
    }
    */
}
