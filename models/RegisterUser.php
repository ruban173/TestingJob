<?php

namespace app\models;

use Yii;

use yii\base\Model;

use app\models\Users;



class RegisterUser extends \yii\db\ActiveRecord
{
   

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
      // [['login', 'password', 'groups','first_name', 'middle_name', 'last_name'], 'required','message'=>'Поле должно быть заполнено!'],
        ['login','unique', 'targetClass'=>self::className(),'targetAttribute' => 'login','message'=>'Данный логин зарегистрирован!'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            
            'login' => 'Логин',
            'password' => 'Пароль',
            'first_name' => 'Имя',
            'middle_name' => 'Отчество',
            'last_name' => 'Фамилия',
            'groups' => 'Группа',
        ];
    }
}
