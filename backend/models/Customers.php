<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customers".
 *
 * @property integer $id
 * @property integer $userId
 * @property string $name
 * @property string $lastName
 * @property string $cellularPhone
 * @property integer $status
 * @property string $description
 * @property string $file
 */
class Customers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId', 'name', 'lastName', 'cellularPhone', 'status'], 'required'],
            [['userId', 'status'], 'integer'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 50],
            [['lastName'], 'string', 'max' => 70],
            [['cellularPhone'], 'string', 'max' => 13],
            [['file'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'userId' => 'User ID',
            'name' => 'Name',
            'lastName' => 'Last Name',
            'cellularPhone' => 'Cellular Phone',
            'status' => 'Status',
            'description' => 'Description',
            'file' => 'File',
        ];
    }
}
