<?php


namespace frontend\modules\inter\database\migrations;
use console\migrations\baseMigration;
class m200804_000339_create_convocados_alu extends baseMigration
{
    const NAME_TABLE='{{%inter_convocados_alu}}';
   const NAME_TABLE_PROGRAMAS='{{%inter_programa}}';
   const NAME_TABLE_UNIVERSIDADES='{{%universidades}}';
    const NAME_TABLE_PERIODOS='{{%periodos}}';
    const NAME_TABLE_DEPARTAMENTOS='{{%departamentos}}';
    const NAME_TABLE_FACULTADES='{{%facultades}}';
    const NAME_TABLE_PERSONAS='{{%personas}}';
        const NAME_TABLE_CONVOCATORIAS='{{%inter_convocatoria}}';
  const NAME_TABLE_ALUMNOS='{{%alumnos}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

$table=static::NAME_TABLE;
if(!$this->existsTable($table)){
        $this->createTable($table, [
            'id'=>$this->primaryKey(),
             'programa_id'=>$this->integer(11),
            
             /*CAMPOS SCOPE*/
            'universidad_id'=>$this->integer(11),
            'codfac'=>$this->string(10)->notNull()->append($this->collateColumn()),
            'codperiodo'=>$this->string(10)->notNull()->append($this->collateColumn()),
            'coddepa' => $this->string(10)->notNull()->append($this->collateColumn()),
             'clase' => $this->char(1)->append($this->collateColumn()),
            /*FIN DE LOS CAMPOS SCOPE*/
            
            'convocatoria_id'=>$this->integer(11),
            'codalu' => $this->string(16)->notNull()->append($this->collateColumn()),
             'univdestino_id'=>$this->integer(11),
           'codfac'=>$this->string(10)->notNull()->append($this->collateColumn()),
            'estado'=>$this->char(2)->notNull()->append($this->collateColumn()),
             'detalle'=>$this->text()->append($this->collateColumn()),
             'detalleinterno'=>$this->text()->append($this->collateColumn()),
            
            
            
            
            ], $this->collateTable());
      
        
           $this->addForeignKey($this->generateNameFk($table), $table,
              'universidad_id', static::NAME_TABLE_UNIVERSIDADES,'id');
           $this->addForeignKey($this->generateNameFk($table), $table,
              'codfac', static::NAME_TABLE_FACULTADES,'codfac');
           $this->addForeignKey($this->generateNameFk($table), $table,
              'codperiodo', static::NAME_TABLE_PERIODOS,'codperiodo');
           $this->addForeignKey($this->generateNameFk($table), $table,
              'coddepa', static::NAME_TABLE_DEPARTAMENTOS,'coddepa');
           $this->addForeignKey($this->generateNameFk($table), $table,
              'programa_id', static::NAME_TABLE_PROGRAMAS,'id');
           $this->addForeignKey($this->generateNameFk($table), $table,
              'convocatoria_id', static::NAME_TABLE_CONVOCATORIAS,'id');
          $this->addForeignKey($this->generateNameFk($table), $table,
              'codalu', static::NAME_TABLE_ALUMNOS,'codalu');
           $this->addForeignKey($this->generateNameFk($table), $table,
               'univdestino_id', static::NAME_TABLE_UNIVERSIDADES,'id');
           
  }
    
    
    
    }
	

    
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        
       if ($this->existsTable(static::NAME_TABLE)) {
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
        echo "m190106_063220_create_table_centros cannot be reverted.\n";

        return false;
    }
    */
}
