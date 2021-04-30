<?php
namespace frontend\modules\maestros\database\migrations;
use console\migrations\baseMigration;
class m210422_163026_alter_table_maestrocompo extends baseMigration
{
      const NAME_TABlE='{{%maestrocompo}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $table=self::NAME_TABlE;
     if(!$this->existsColumn($table,'oldnumberpart'))
        $this->addColumn(self::NAME_TABlE, 'oldnumberpart', $this->string(16)->defaultValue(null));
         
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        
        if($this->existsColumn($table,'oldnumberpart'))
        $this->dropColumn(self::NAME_TABlE, 'oldnumberpart', $this->string(16)->defaultValue(null));
         
           }
}
        /* $table=static::NAME_TABlE;
     if($this->existsColumn($table,'transaccion'))
       $this->dropColumn(self::NAME_TABlE, 'transaccion');
      if($this->existsColumn($table,'esruta'))
        $this->dropColumn(self::NAME_TABlE, 'esruta');
       if($this->existsColumn($table,'grupo'))
         $this->dropColumn(self::NAME_TABlE, 'grupo');
        return true;*/
    

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200716_223320_alter_table_auth_item cannot be reverted.\n";

        return false;
    }
    */

