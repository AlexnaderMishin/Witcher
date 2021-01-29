<?php
namespace app\models;
use yii\base\Model;

class SignUp extends Model
{
    public $username;
    public $email;
    public $password;
    public $passwordConf;

    public function rules()
    {
        return[
            [['username', 'email', 'password', 'passwordConf'], 'required', 'message' => 'Поле должно быть запонено!'],
            ['username', 'unique', 'targetClass' =>  'app\models\User', 'message' => 'Такой пользователь уже существует!'],
            ['email', 'unique', 'targetClass' =>  'app\models\User', 'message' => 'Почта уже зарегестрирована!'],
            ['password', 'string', 'min' => 8, 'max' => 12],
            ['passwordConf', 'required'],
            ['passwordConf', 'compare', 'compareAttribute'=>'password', 'message'=>"Пароли не совпадают!" ]
        ];
    }
    
        public function signup(){
            
            $user = new  User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->password = $this->password;
            return $user->save();
        
        }
    
    
}