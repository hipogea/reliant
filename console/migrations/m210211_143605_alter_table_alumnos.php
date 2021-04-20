<?php

  use console\migrations\baseMigration;

class m210211_143605_alter_table_alumnos extends baseMigration
{
    const NAME_TABLE='{{%alumnos}}';
    //const NAME_TABLE_PERSONAS='{{%personas}}';
    
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $table=static::NAME_TABLE;
        if(!$this->existsColumn($table,'tipogrado'))
           $this->addColumn($table, 'tipogrado', $this->string(10)); 
        
         if(!$this->existsColumn($table,'cicloactual'))
          $this->addColumn($table, 'cicloactual', $this->string(4)); 
         
         if(!$this->existsColumn($table,'nsemestres'))
          $this->addColumn($table, 'nsemestres', $this->integer(2)); 
         
         if(!$this->existsColumn($table,'fecingreso'))
           $this->addColumn($table, 'fecingreso', $this->string(10));  
         if(!$this->existsColumn($table,'ftermino'))
           $this->addColumn($table, 'ftermino', $this->string(10));  
         
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $table=static::NAME_TABLE;
      if($this->existsColumn($table,'tipogrado'))
           $this->dropColumn($table, 'tipogrado'); 
      
      if($this->existsColumn($table,'nsemestres'))
          $this->dropColumn($table, 'nsemestres'); 
        
         if($this->existsColumn($table,'cicloactual'))
          $this->dropColumn($table, 'cicloactual'); 
         
         if($this->existsColumn($table,'fecingreso'))
          $this->dropColumn($table, 'fecingreso');
         
         if($this->existsColumn($table,'ftermino'))
           $this->dropColumn($table, 'ftermino'); 
    }

    
}
