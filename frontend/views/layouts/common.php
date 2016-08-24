<?php

/** 
 * @link http://blog.kunx.org/.
 * @copyright Copyright (c) 2016-8-24 
 * @license kunx-edu@qq.com.
 */
frontend\assets\AppAsset::register($this);


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= yii\helpers\Html::csrfMetaTags() ?>
    <title><?= yii\helpers\Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

        <?php echo $content;?>
    <?php echo $this->endBody();?>
    </body>
</html>
<?php $this->endPage() ?>