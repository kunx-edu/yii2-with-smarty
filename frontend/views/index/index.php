<?php

/** 
 * @link http://blog.kunx.org/.
 * @copyright Copyright (c) 2016-8-24 
 * @license kunx-edu@qq.com.
 */
$this->params['breadcrumbs'] = [
    [
        'url'=>'http://weibo.com/sigexukun',
        'label'=>'white house'
    ],
    'http://weibo.com/sigexukun',
];
$this->title = '用户列表';
?>

<table class="table table-bordered table-condensed table-hover">
    <tr>
        <th>序号</th>
        <th>姓名</th>
        <th>年龄</th>
    </tr>
    <?php foreach($list as $row):?>
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['age'];?></td>
    </tr>
    <?php endforeach;?>
</table>