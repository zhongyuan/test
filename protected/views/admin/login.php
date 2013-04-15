<?php
$this->breadcrumbs=array(
	'Admin',
);?>
<!--<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>-->
<style>
    .admin_lbody{
        width: 100%;
        margin: 50px auto;

        text-align: center;
    }
    .admin_body li{
        margin: 20px 0;
    }
    .submit{
        margin: 20px 0;
        width: 80px;
        font-size: 30px;
        text-align: center;
    }
    .error{
        display: none;
    }
</style>

<div class="admin_lbody">
    <form action="" method="post">
    <ul>
        <li><span>用户名：</span><input type="text" name="admin"></li>
        <li><span>密码：</span><input type="password" name="password"></li>

    </ul>
        <div class="error"></div>
        <input class="submit" type="submit" name="submit" value="提交" />
    </form>

</div>