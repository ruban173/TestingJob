<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Users".
 *
 * @property int $id
 * @property string $login
 * @property string $password
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $authKey
 * @property string $accessToken
 * @property string $date_create
 * @property bool $status
 * @property string $groups
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login', 'password', 'groups'], 'required'],
            [['date_create'], 'safe'],
            [['status'], 'boolean'],
            [['login', 'password', 'authKey', 'accessToken'], 'string', 'max' => 64],
            [['first_name', 'middle_name', 'last_name'], 'string', 'max' => 50],
            [['groups'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'password' => 'Password',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'date_create' => 'Date Create',
            'status' => 'Status',
            'groups' => 'Groups',
        ];
    }
}
