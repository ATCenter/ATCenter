<?php

use yii\db\Migration;

/**
 * Handles the creation of table `employes`.
 */
class m171216_185645_create_employes_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('employes', [
            'id' => $this->primaryKey(),
            'userId' => $this->integer()->notNull(),
            'name' => $this->string(50)->notNull(),
            'lastName' => $this->string(70)->notNull(),
            'cellularPhone' => $this->string(13)->notNull(),
            'landlinePhone' => $this->string(13)->notNull(),
            'nationalCode' => $this->string(10)->notNull(),
            'lastEducationalCertificate' => $this->string(50),
            'dateOfbirth' => $this->date()->notNull(),
            'placeOfIssue' => $this->string(50)->notNull(),
            'maritalStatus' => $this->smallInteger()->notNull(),
            'address' => $this->string(255)->notNull(),
            'finalQualificationPlace' => $this->string(100)->notNull(),
            'graduationDate' => $this->date()->notNull(),
            'fieldOfStudy' => $this->string(100)->notNull(),
            'totalAverage' => $this->string(20)->notNull(),
            'file' => $this->string(255),
            'picture' => $this->string(255)->notNull(),
            'status' => $this->smallInteger()->notNull(),
            'description' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('employes');
    }
}
