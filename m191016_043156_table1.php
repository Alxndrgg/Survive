<?php
 
use yii\db\Migration;
 
/**
 * Handles the creation of table `user`.
 */
class m191016_043156_table1 extends Migration
{
	public function up()
    {
        $tableOptions = null;
 
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
 
        $this->createTable('firms', [
            'firm_id' => $this->primaryKey(),
            'firm_name' => $this->string()->notNull()->unique(),
            
        ], $tableOptions);
    }
 
    public function down()
    {
        $this->dropTable('firms');
    }
}
