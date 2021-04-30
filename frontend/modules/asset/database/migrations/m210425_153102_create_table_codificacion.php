<?php
namespace frontend\modules\asset\database\migrations;
use console\migrations\baseMigration;
class m210425_153102_create_table_codificacion extends baseMigration
{
     const NAME_TABLE='{{%asset_codificacion}}';
     //const NAME_TABLE_PLACES='{{%lugares}}';
    // const NAME_TABLE_DOCUMENTOS='{{%documentos}}';
 
    
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
$table=static::NAME_TABLE;
if(!$this->existsTable($table)) {
 $this->createTable($table, [
            'id'=>$this->primaryKey(),
           'parent_id'=>$this->integer(11),
            'descripcion'=>$this->string(40)->append($this->collateColumn()),
             'codigo'=>$this->string(16)->append($this->collateColumn()),
            'lonhijo'=>$this->string(16)->append($this->collateColumn()), 
     
             'codigo'=>$this->string(16)->append($this->collateColumn()),
            'codigo2'=>$this->string(16)->append($this->collateColumn()),
            'codigo3'=>$this->string(16)->append($this->collateColumn()),
     'codmaterial'=>$this->string(16)->append($this->collateColumn()),
                ],
                $this->collateTable());
       }

    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        
      if($this->existsTable(static::NAME_TABLE)) {
          /// $this->dropForeignKey('fk_actos_pls_ORIG',static::NAME_TABLE);
           // $this->dropForeignKey('fk_acos_pces',static::NAME_TABLE);
           //$this->dropForeignKey('fk_acts_docu45os',static::NAME_TABLE);
            $this->dropTable(static::NAME_TABLE);
        }

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190406_230040_create_table_items cannot be reverted.\n";

        return false;
    }
    */
}
