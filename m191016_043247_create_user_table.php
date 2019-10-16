
<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m191016_043247_create_user_table extends Migration
{
	public function up()
    {
        $tableOptions = null;
 
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
 
        $this->createTable('users', [
            'user_id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull()->unique(),
          
          
        ], $tableOptions);
    }
 
    public function down()
    {
        $this->dropTable('users');
    }
}


