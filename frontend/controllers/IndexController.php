<?php

/**
 * @link http://blog.kunx.org/.
 * @copyright Copyright (c) 2016-8-24 
 * @license kunx-edu@qq.com.
 */

namespace frontend\controllers;

/**
 * 所有控制器集成\yii\web\controller
 * 并且文件名以.php结尾
 * @author kunx <kunx-edu@qq.com>
 */
class IndexController extends \yii\web\Controller{
//    public $layout = '@app/views/layouts/main';
    
//    public $enableCsrfValidation = false;
    /**
     * 所有操作以action开头
     */
    public function actionIndex() {
        $this->layout = 'main';
        $user_list = \frontend\models\User::find()->all();
        return $this->render('index',[
            'list'=>$user_list,
        ]);
    }
    
    public function actionAdd() {
        return $this->render('add');
    }
    
    /**
     * 如果是插入新纪录,模型需要使用new
     */
    public function actionSave() {
        $user_model = new \frontend\models\User;
        $user_model->name = $_POST['name'];
        $user_model->age = $_POST['age'];
//        $user_model->insert();
        return $user_model->save();
    }
    
    public function actionApp() {
        var_dump(\Yii::$app->db);
    }
    
    public function actionParam() {
        var_dump(\Yii::$app->params);
    }
    
    public function actionAlias() {
        var_dump(\Yii::getAlias('@blog'));
        var_dump(\Yii::getAlias('@email'));
        var_dump(\Yii::getAlias('@big school'));
        
        //获取webroot别名
        var_dump(\Yii::getAlias('@webroot'));
        var_dump(\Yii::getAlias('@web'));
        var_dump(\Yii::getAlias('abc'));
    }
    
    public function actionForm() {
        $model = new \frontend\models\RegistForm();
//        $model->sex=2;
//        return $this->render('demo.tpl',[
//            'model'=>$model,
//        ]);
//        var_dump($_POST);
//        $model->load($_POST);
        $model->load(\Yii::$app->request->post());
        $model->load(\Yii::$app->request->post('RegistForm'));
//        if($_POST){
//            $model->attributes = $_POST['RegistForm'];
//        }
        return $this->render('reg',[
            'model'=>$model,
        ]);
    }
    
    public function actionRequest() {
        //获取请求方式
        $request = \Yii::$app->request;
//        var_dump($request);
        var_dump(\Yii::$app->request->isPost);
        var_dump(\Yii::$app->request->getIsPost());
        var_dump(\Yii::$app->request->isGet);
        var_dump(\Yii::$app->request->getMethod());
        
        //获取get请求的参数
        var_dump($request->get());
        var_dump($request->get('name'));
        
        //获取请求头
        var_dump($request->getHeaders());
        
        //获取请求路径信息
        var_dump($request->getPathinfo());
        
    }
    
    public function actionSmarty(){
        $this->layout = false;
        return $this->render('demo.tpl',[
            'list'=>[
                ['name'=>'zhangsan','age'=>78],
                ['name'=>'lisi','age'=>79],
                ['name'=>'sige','age'=>17],
            ]
        ]);
    }
    /**
     * 访问:http://www.yii2.com/index.php?r=index/show-user-detail
     * 将驼峰式命名法改为中横线命名法,控制名也是这样.
     * @return int
     */
    public function actionShowUserDetail() {
        return 1;
    }
}
