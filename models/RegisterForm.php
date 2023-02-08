<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read User|null $user
 *
 */
class RegisterForm extends Model
{
    public $username;
    public $email;
    public $mobile;
    public $password_repeat;
    public $password;

    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'email', 'mobile', 'password', 'password_repeat'], 'required'],
            ['username', 'string', 'min' => 4, 'max' => 16],
            [['password', 'password_repeat'], 'string', 'min' => 8, 'max' => 32],
            
            ['password_repeat', 'compare', 'compareAttribute'=>'password', 'message'=>"گذرواژه همخوانی ندارد" ],
        ];
    }

    public function register()
    {
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->mobile = $this->mobile;
        $user->auth_key = \Yii::$app->security->generateRandomString();
        $user->password_hash = \Yii::$app->security->generatePasswordHash($this->password);

        if ($user->save()){
            return true;
        } else {
            return $user->errors;
        }
    }

}
