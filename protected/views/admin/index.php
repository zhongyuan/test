
<?php $this->widget('AdminWidget');?>
<style>
    .welcome{
        font-size: 30px;
        text-align: center;
        padding: 40px 0;
    }
</style>

<div>
    <p class="welcome">Welcom,<?php echo Yii::app()->session['staff_name']; ?></p>
</div>