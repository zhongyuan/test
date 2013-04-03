<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php $this->widget('AppWidget');?>

<style>
    .app_ibody{
        padding: 0px 70px;
        color: gray;
        /*先设置为灰色*/
    }
    .app_para{
        padding: 20px 0px;
        font-size: 14px;
    }
    .horizon_line{
        overflow:hidden;
        height: 1px;
        width: 100%;
        background-color: #c2c4c8;
    }
    .vertical_line{
        height: 10px;
        width: 3px;
        background-color: #ff6633;
        /*颜色未定*/
    }
    .app_ileft{

    }
    .app_iprocess{
        font-size: 24px;
        color: black;
        margin: 0px 20px;
    }
</style>

<div class="app_ibody">
    <p class="app_para">经过多年的努力！终于，中国拥有了自己的OS！新的设计，也在人与人之间。洞
    悉该模式的团队会早早的对付接口，在提交所有的组件代码之前，他们构建了一系列的程序来检验接口。
    他们早早地集成个人代码，频繁地测试。请记住康威定律(Conway's Law):产品反映了制造该产品的
    组织结构。对于接口，这一点尤为正确：项目中易导致复杂的产品接口</p>

    <div class="horizon_line"></div>

    <div class="app_ileft">
        <div class="app_iprocess">
            <span class="vertical_line">&nbsp;</span><span class="app_iprocess">大赛流程</span>
            <p>
                <img src="<?php echo $this->staticUrl('appIndex/app_iprocess.jpg');?>" />
            </p>
        </div>

        <div>
            <ul>
                <li>

                </li>
            </ul>
        </div>

    </div>

    <div class="app_iright">
        <!--<span class="vertical_line">&nbsp;</span><span>大赛流程</span>-->
        <ul>

        </ul>
    </div>


</div>