<?php

use yii\db\Migration;

class m160302_150823_laporan_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%laporan}}', [
            'id' => Schema::TYPE_PK,
            'nama_perusahaan' => Schema::TYPE_STRING . '(200) NOT NULL',
            'alamat' => Schema::TYPE_STRING . '(1000) NOT NULL',
            'cp' => Schema::TYPE_STRING . '(200) NOT NULL',
            'produk' => Schema::TYPE_STRING . '(200) NOT NULL',
            'review' => Schema::TYPE_STRING . '(20000) NOT NULL',
            'foto' => Schema::TYPE_STRING . '(64) DEFAULT NULL',
            'gps' => Schema::TYPE_STRING . '(200) NOT NULL',
            'created' => Schema::TYPE_TIMESTAMP . ' NOT NULL DEFAULT CURRENT_TIMESTAMP',
        ], $tableOptions);
    }

    public function down()
    {
        echo "m160302_150823_laporan_init cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
