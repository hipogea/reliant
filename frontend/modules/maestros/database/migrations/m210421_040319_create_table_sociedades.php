<?php
namespace frontend\modules\maestros\database\migrations;
use console\migrations\baseMigration;
class m210421_040319_create_table_sociedades extends baseMigration
{

    const NAME_TABLE='{{%sociedades}}';
    //const NAME_TABLE_SOCIEDADES='{{%sociedades}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
 
if ($this->db->schema->getTableSchema(static::NAME_TABLE, true) === null) {
        $this->createTable(static::NAME_TABLE, [
           'socio' => $this->char(1)->notNull()->append($this->collateColumn()),
            'dsocio' => $this->string(40)->append($this->collateColumn()),
            'rucsoc' => $this->string(15)->notNull()->unique()->append($this->collateColumn()), 
           'activo' => $this->char(1)->append($this->collateColumn()),
           'direccionfiscal'=>$this->string(100)->append($this->collateColumn()),
            'telefonos'=>$this->string(35)->append($this->collateColumn()),
            'web'=>$this->string(150)->append($this->collateColumn()),
            'mail' => $this->string(80)->append($this->collateColumn()), 
            'regimentributario'=> $this->string(6)->append($this->collateColumn()), 
           
            ], $this->collateTable());
       $this->addPrimaryKey($this->generateNameFk(static::NAME_TABLE),static::NAME_TABLE, 'socio');
      
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
