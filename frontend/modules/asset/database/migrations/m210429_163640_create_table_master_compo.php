<?php
namespace frontend\modules\asset\database\migrations;
use console\migrations\baseMigration;
class m210429_163640_create_table_master_compo extends baseMigration
{
    
    const NAME_TABLE='{{%asset_locations}}';
    //const NAME_TABLE_PERSONAS='{{%personas}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

$table=static::NAME_TABLE;
if(!$this->existsTable($table)){
        $this->createTable($table, [
            'id'=>$this->primaryKey(),
            'ismovil'=>$this->char(1)->append($this->collateColumn()),
            'code'=>$this->string(12)->append($this->collateColumn()),
            'cc'=>$this->string(12)->append($this->collateColumn()),
            'codcen'=>$this->string(5)->append($this->collateColumn()),
            'istop'=>$this->char(1)->append($this->collateColumn()),
            'parent_id'=>$this->integer(1),
            'nombre' => $this->string(40)->notNull()->append($this->collateColumn()),
            'path' => $this->string(256)->notNull()->append($this->collateColumn()),
            //'acronimo' => $this->string(12)->notNull()->append($this->collateColumn()),
           'activo' => $this->char(1)->append($this->collateColumn()),
            'detalle'=>$this->text()->append($this->collateColumn())
            ], $this->collateTable());
         // $this->addForeignKey($this->generateNameFk($table), $table,'parent_id', static::NAME_TABLE_FACULTADES,'id');
           // $this->addForeignKey($this->generateNameFk($table), $table,'universidad_id', static::NAME_TABLE_UNIVERSIDADES,'id');
          
  }
    
    
    
    }
	

    
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        
      $table=static::NAME_TABLE;
     if($this->existsTable($table)){
            $this->dropTable(static::NAME_TABLE);
        }
    }

   
}
