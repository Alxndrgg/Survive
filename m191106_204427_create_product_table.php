<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m191106_204427_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
   public function up()
    {
        $tableOptions = null;
 
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
 
        $this->createTable('products', [
            'Product_id' => $this->primaryKey(),
            'Name' => $this->text()->notNull(),
            'Calories' => $this->int()->notNull(),
			'Protein' => $this->int()->notNull(),
			'Fats' => $this->int()->notNull(),
			'Carbs' => $this->int()->notNull(),
			'Priority' => $this->int()->notNull(), 
			'Mealtime' => $this->int()->notNull(),
			], $tableOptions);
    }
 
    public function down()
    {
        $this->dropTable('products');
    }
}

