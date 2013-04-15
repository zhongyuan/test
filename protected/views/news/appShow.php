
<style>
    .app_sbody{
        padding: 0px 70px;

    }
    .app_sli li{
        width: 100%;
        height: 188px;
        margin: 20px 0;
    }
    .app_sli li img:first-child{
        display: inline-block;
        vertical-align: top;
    }
    .app_sli li p{
        width: 655px;
        height: 188px;
        font-size: 14px;
        display: inline-block;
        vertical-align: top;
        position: relative;
    }
    .app_stitle{
        font-size: 24px;
        color: black;
    }
    .app_stitle2{
        font-size: 16px;
        color: gray;
    }
    .app_sanrow{
        position: absolute;
        bottom: 10px;
        right: 10px;
    }
</style>

<?php $this->widget('AppWidget');?>


<div class="app_sbody">
    <ul class="app_sli">
        <li>
            <img src="<?php echo $this->staticUrl('news/worksUpload/big/work_1.jpg'); ?>"/>
            <p>
                <span class="app_stitle">Static</span> <span class="app_stitle2">轻松查看朋友们的线上的状态</span> <br/>
                <span>静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类，
                    每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好
                    处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内
                    存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类
                    对象的利息全改变过来了；
                </span>
                <img class="app_sanrow" src="<?php echo $this->staticUrl('news/app/anrow_down.jpg'); ?>" />
            </p>
        </li>

        <li>
            <img src="<?php echo $this->staticUrl('news/worksUpload/big/work_2.jpg'); ?>"/>
            <p>
                <span class="app_stitle">起床啦</span> <span class="app_stitle2">轻松查看朋友们的线上的状态</span> <br/>
                <span>静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类，
                    每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好
                    处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内
                    存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类
                    对象的利息全改变过来了；
                </span>
                <img class="app_sanrow" src="<?php echo $this->staticUrl('news/app/anrow_down.jpg'); ?>" />
            </p>
        </li>

        <li>
            <img src="<?php echo $this->staticUrl('news/worksUpload/big/work_3.jpg'); ?>"/>
            <p>
                <span class="app_stitle">POP</span> <span class="app_stitle2">轻松查看朋友们的线上的状态</span> <br/>
                <span>静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类，
                    每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好
                    处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内
                    存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类
                    对象的利息全改变过来了；
                </span>
                <img class="app_sanrow" src="<?php echo $this->staticUrl('news/app/anrow_down.jpg'); ?>" />
            </p>
        </li>

        <li>
            <img src="<?php echo $this->staticUrl('news/worksUpload/big/work_4.jpg'); ?>"/>
            <p>
                <span class="app_stitle">Turnplay</span> <span class="app_stitle2">轻松查看朋友们的线上的状态</span> <br/>
                <span>静态数据成员主要用在各个对象都有相同的某项属性的时候。比如对于一个存款类，
                    每个实例的利息都是相同的。所以，应该把利息设为存款类的静态数据成员。这 有两个好
                    处，第一，不管定义多少个存款类对象，利息数据成员都共享分配在全局数据区的内
                    存，所以节省存储空间。第二，一旦利息需要改变时，只要改变一次， 则所有存款类
                    对象的利息全改变过来了；
                </span>
                <img class="app_sanrow" src="<?php echo $this->staticUrl('news/app/anrow_down.jpg'); ?>" />
            </p>
        </li>

    </ul>


    <!-- ===========================翻页====================== -->

    <div class="green-black">

        <?php $this->widget('MyLinkPager', array(
            'pages' => $pages,
        )) ?>
    </div>

</div>