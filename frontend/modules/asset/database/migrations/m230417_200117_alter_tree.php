<?php
namespace frontend\modules\asset\database\migrations;
use yii\db\Migration;

/**
 * Class m230417_200117_alter_tree
 */
class m230417_200117_alter_tree extends Migration
{
    const TABLE_NAME = '{{%asset_codcompo}}';
    
    /**
     * {@inheritdoc}
     */
     public function safeUp()
    {
        $table = $this->db->schema->getTableSchema(self::TABLE_NAME, true);
        if (!$table) {
            return;
        }
        if (!isset($table->columns['child_allowed'])) {
            $this->addColumn(self::TABLE_NAME, 'child_allowed', $this->boolean()->notNull()->defaultValue(true));
        }
        
        if (!isset($table->columns['codecomplete'])) {
            $this->addColumn(self::TABLE_NAME, 'codecomplete', $this->string(40));
        }
        if (!isset($table->columns['maxlenght'])) {
            $this->addColumn(self::TABLE_NAME, 'maxlenght', $this->integer(2)->defaultValue(2));
        }
        if (!isset($table->columns['description'])) {
            $this->addColumn(self::TABLE_NAME, 'description', $this->string(40));
        }
         if (!isset($table->columns['detalle'])) {
            $this->addColumn(self::TABLE_NAME, 'detalle', $this->text());
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn(self::TABLE_NAME, 'child_allowed');
        $this->dropColumn(self::TABLE_NAME, 'codecomplete');
        $this->dropColumn(self::TABLE_NAME, 'maxlenght');
         $this->dropColumn(self::TABLE_NAME, 'description');
         $this->dropColumn(self::TABLE_NAME, 'detalle');
    }
  
}