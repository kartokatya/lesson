<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 */
class m180602_112205_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'first_name'=>$this->string(),
            'last_name'=>$this->string(),
            'email'=>$this->string()->notNull()->unique(),
            'password'=>$this->string(0),
            'auth_key'=>$this->string(),
            'access_token'=>$this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
    }
}
