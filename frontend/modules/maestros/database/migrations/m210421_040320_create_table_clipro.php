<?php
namespace frontend\modules\maestros\database\migrations;
use console\migrations\baseMigration;
class m210421_040320_create_table_clipro extends baseMigration
{
    const NAME_TABLE='{{%clipro}}';
    //const NAME_TABlE_DIRECCIONES='{%direcciones}';
        public function safeUp()
    {
 $table=static::NAME_TABLE;
if(!$this->existsTable($table)) {
        $this->createTable($table, [
            'codpro' => $this->char(6)->notNull()->append($this->collateColumn()),
            'despro' => $this->string(60)->notNull()->append($this->collateColumn()), 
            'rucpro'=>$this->string(15)->notNull()->append($this->collateColumn()), 
            'telpro'=>$this->string(15)->append($this->collateColumn()),  
            'web'=>$this->string(85)->append($this->collateColumn()), 
            'deslarga'=>$this->text()->append($this->collateColumn()),
             ], $this->collateTable());
       $this->addPrimaryKey($this->generateNameFk(static::NAME_TABLE),static::NAME_TABLE, 'codpro');      
        }
   
        
    }
        
    public function safeDown()
    {
        $table=static::NAME_TABLE;
        
        if ($this->existsTable($table)) {
            $this->dropTable(static::NAME_TABLE);
        }
    }
}