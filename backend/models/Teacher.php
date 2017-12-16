<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employes".
 *
 * @property integer $id
 * @property integer $userId
 * @property string $name
 * @property string $lastName
 * @property string $cellularPhone
 * @property string $landlinePhone
 * @property string $nationalCode
 * @property string $lastEducationalCertificate
 * @property string $dateOfbirth
 * @property string $placeOfIssue
 * @property integer $maritalStatus
 * @property string $address
 * @property string $finalQualificationPlace
 * @property string $graduationDate
 * @property string $fieldOfStudy
 * @property string $totalAverage
 * @property string $file
 * @property string $picture
 * @property integer $status
 * @property string $description
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId', 'name', 'lastName', 'cellularPhone', 'landlinePhone', 'nationalCode', 'dateOfbirth', 'placeOfIssue', 'maritalStatus', 'address', 'finalQualificationPlace', 'graduationDate', 'fieldOfStudy', 'totalAverage', 'picture', 'status'], 'required'],
            [['userId', 'maritalStatus', 'status'], 'integer'],
            [['dateOfbirth', 'graduationDate'], 'safe'],
            [['description'], 'string'],
            [['name', 'lastEducationalCertificate', 'placeOfIssue'], 'string', 'max' => 50],
            [['lastName'], 'string', 'max' => 70],
            [['cellularPhone', 'landlinePhone'], 'string', 'max' => 13],
            [['nationalCode'], 'string', 'max' => 10],
            [['address', 'file', 'picture'], 'string', 'max' => 255],
            [['finalQualificationPlace', 'fieldOfStudy'], 'string', 'max' => 100],
            [['totalAverage'], 'string', 'max' => 20],
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
            'landlinePhone' => 'Landline Phone',
            'nationalCode' => 'National Code',
            'lastEducationalCertificate' => 'Last Educational Certificate',
            'dateOfbirth' => 'Date Ofbirth',
            'placeOfIssue' => 'Place Of Issue',
            'maritalStatus' => 'Marital Status',
            'address' => 'Address',
            'finalQualificationPlace' => 'Final Qualification Place',
            'graduationDate' => 'Graduation Date',
            'fieldOfStudy' => 'Field Of Study',
            'totalAverage' => 'Total Average',
            'file' => 'File',
            'picture' => 'Picture',
            'status' => 'Status',
            'description' => 'Description',
        ];
    }
}
