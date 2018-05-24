<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m180522_161803_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(),
            'description'=>$this->text(),
            'name'=>$this->string()->notNull(),
            'content'=>$this->text(),
            'price'=>$this->integer(),
            'category_id'=>$this->integer(),
            'actve'=>$this->boolean(),
            'amount'=>$this->integer(),
            'slug'=>$this->string(),

        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product');
    }
}
