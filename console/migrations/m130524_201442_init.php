<?php

use yii\db\Schema;

class m130524_201442_init extends \yii\db\Migration
{
    public function up()
    {
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
