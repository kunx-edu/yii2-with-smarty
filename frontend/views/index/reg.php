<?php
/**
 * @link http://blog.kunx.org/.
 * @copyright Copyright (c) 2016-8-24 
 * @license kunx-edu@qq.com.
 */
$form = yii\bootstrap\ActiveForm::begin([
//    'action'=>'http://blog.kunx.org',
    'method'=>'post',
    'options'=>[
        'enctype'=>'multipart/form-data'
    ],
    
]);
echo $form->field($model, 'username')->textInput();
echo $form->field($model, 'password')->passwordInput();
echo $form->field($model, 'email');
echo $form->field($model, 'sex')->radioList([
    1=>'male',
    2=>'female',
]);
echo $form->field($model, 'edu')->dropDownList([
    1=>'little school',
    2=>'middle school',
    3=>'high school',
    4=>'big school',
],[
    'prompt'=>'请选择学历',
    'id'=>'test'
]);
?>

<div class="form-group">
    <?php echo \yii\bootstrap\Html::submitButton('提交',['class'=>'form-control btn btn-primary']); ?>
</div>
<?php

yii\bootstrap\ActiveForm::end();
