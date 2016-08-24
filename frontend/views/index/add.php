<?php

/** 
 * @link http://blog.kunx.org/.
 * @copyright Copyright (c) 2016-8-24 
 * @license kunx-edu@qq.com.
 */
?>

<form method="post" action="index.php?r=index/save">
    <input name="<?php echo \Yii::$app->request->csrfParam;?>" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
    <table>
        <tr>
            <td>姓名</td>
            <td><input type="text" name="name" /></td>
        </tr>
        <tr>
            <td>年龄</td>
            <td><input type="text" name="age" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="添加" /></td>
        </tr>
    </table>
</form>

