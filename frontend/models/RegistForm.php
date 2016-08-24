<?php

/**
 * @link http://blog.kunx.org/.
 * @copyright Copyright (c) 2016-8-24 
 * @license kunx-edu@qq.com.
 */

namespace frontend\models;

/**
 * Description of RegistForm
 *
 * @author kunx <kunx-edu@qq.com>
 */
class RegistForm extends \yii\base\Model{
    
    public $username;
    public $password;
    public $sex;
    public $email;
    public $edu;
    
    public function attributeLabels() {
        return [
            'username'=>'用户名',
            'password'=>'密码',
            'email'=>'邮箱',
        ];
    }
    
    public function rules() {
        return [
            ['username','required','message'=>'报上名来'],
            [['password','email','edu'],'required'],
            ['sex','safe'],
        ];
    }
}
