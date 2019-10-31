<?php

use yii\db\Migration;

/**
 * Class m191031_043613_create_table_ksko
 */
class m191031_043613_create_table_ksko extends Migration
{
    public function up()
    {
        $tableOptions = null;
 
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
 
        $this->createTable('ksko_for_git', [
            't_id' => $this->primaryKey(),
            't_username' => $this->string()->notNull()->unique(),
            't_email' => $this->string()->notNull()->unique(),
            't_status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }
 
    public function down()
    {
        $this->dropTable('ksko_for_git');
    }
}
