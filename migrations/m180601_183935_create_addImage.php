<?php

use yii\db\Migration;

/**
 * Class m180601_183935_create_addImage
 */
class m180601_183935_create_addImage extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('product','image','string');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180601_183935_create_addImage cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180601_183935_create_addImage cannot be reverted.\n";

        return false;
    }
    */
}
