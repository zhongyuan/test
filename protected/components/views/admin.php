<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<style>
    .admin_hbody{
        width: 100%;
        text-align: center;
    }
    .admin_hnav li{
        display: inline-block;
        margin: 10px 20px;
        font-size: 25px;
    }
</style>

<div class="admin_hbody">
    <ul class="admin_hnav">
        <li><a href="<?php echo Yii::app()->createUrl('admin/addArtical') ?>">添加文章</a></li>
        <li>删除文章</li>
        <li>修改密码</li>
        <li>退出管理员</li>

    </ul>
</div>