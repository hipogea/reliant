<?php
namespace frontend\modules\maestros\database\migrations;
use console\migrations\baseMigration;

class m210421_050255_create_table_maestroclipro extends baseMigration
{
   const NAME_TABLE='{{%maestrocompo}}';
   const NAME_TABLE_UM='{{%ums}}';
    
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $table=static::NAME_TABLE;
    if(!$this->existsTable($table)) {
        $this->createTable(static::NAME_TABLE, [
            'id'=>$this->primaryKey(),
             'codpro'=>$this->char(6)->append($this->collateColumn()),
            'codart'=>$this->string(14)->notNull()->append($this->collateColumn()),
            'tiempoentrega'=>$this->integer(4),
             'vencimiento'=>$this->integer(4),
            'codmon'=>$this->string(4)->append($this->collateColumn()),
             'codcen'=>$this->string(5)->append($this->collateColumn()),
            ],
                $this->collateTable());
        $this->addForeignKey($this->generateNameFk(static::NAME_TABLE), static::NAME_TABLE,
              'codum',static::NAME_TABLE_UM,'codum');
        $this->putCombo($table, 'codtipo', 'MAQUINARIA');
        
         }
    }
    /**
     * {@inheritdoc}
     */
     public function safeDown()
    {
       if ($this->db->schema->getTableSchema(static::NAME_TABLE, true) !== null) {
            
           
           $this->dropTable(static::NAME_TABLE);
        }

    }

}
