<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m180522_164147_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'name'=>$this->string()->notNull(),
            'description'=>$this->text(),
            'active'=>$this->boolean()->defaultValue(false)
        ]);
       $this->addForeignKey('product_to_cat','product','category_id','category','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category');
    }
}
