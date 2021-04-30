<?php
  use console\migrations\baseMigration;
class m210430_182056_alter_table_personas extends Migration
{
   const NAME_TABLE='{{%personas}}';
    //const NAME_TABLE_PERSONAS='{{%personas}}';
    
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $table=static::NAME_TABLE;
        if(!$this->existsColumn($table,'correo'))
           $this->addColumn($table, 'correo', $this->string(200)); 
        
         
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $table=static::NAME_TABLE;
      if($this->existsColumn($table,'correo'))
           $this->dropColumn($table, 'correo'); 
     
    }

    
}
