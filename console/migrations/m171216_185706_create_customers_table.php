<?php

use yii\db\Migration;

/**
 * Handles the creation of table `customers`.
 */
class m171216_185706_create_customers_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('customers', [
            'id' => $this->primaryKey(),
            'userId' => $this->integer()->notNull(),
            'name' => $this->string(50)->notNull(),
            'lastName' => $this->string(70)->notNull(),
            'cellularPhone' => $this->string(13)->notNull(),
            'status' => $this->smallInteger()->notNull(),
            'description' => $this->text(),
            'file' => $this->string(255),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('customers');
    }
}
