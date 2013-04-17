<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/newsIndex.css"  />

<div>

    <div class="nav_images" style="padding: 0 70px;height:400px">
        <img src="<?php echo $this->staticUrl('news/index/news_first_1.jpg');?>" />
    </div>

    <div class="short_news" style="width:100%;margin-top: 15px;float: left;overflow: hidden;">
        <div class="news_second_1" style="width:33%" >
            <div><img src="<?php echo $this->staticUrl('news/index/news_second_1.jpg');?>"  width="150"/></div>

            <div class="news_pub">
                <p class="news_sub_title">创新发布会</p>
                <p class="news_sub_detail">
					2013年4月1日<br />COS发布会召开<br />各位大虾都非常有兴趣
				</p>

                <a href="#"><img class="news_pub_more" src="<?php echo $this->staticUrl('news/index/more.jpg');?>" /></a>
            </div>

        </div>

        <div style="overflow:hidden;height: 150px;width: 1px;background-color: #c2c4c8;"></div>

        <div class="news_second_2" style="width:32%;" >
            <div style="margin-left:20px"><img src="<?php echo $this->staticUrl('news/index/news_second_2.jpg');?>" width="110"/></div>

            <div class="news_up">
                <p class="news_sub_title">平板系统升级</p>
                <p class="news_sub_detail">
					最新系统支持平板电脑2.0<br />以上系统升级，并且免费。
				</p>

                <a href="#">
					<img class="news_up_more" src="<?php echo $this->staticUrl('news/index/more.jpg');?>" />
				</a>
                <img class="news_up_robert" src="<?php echo $this->staticUrl('news/index/news_robert.jpg');?>" />
            </div>
        </div>

        <div  style="overflow:hidden;height: 150px;width: 1px;background-color: #c2c4c8;margin-left: -4px;"></div>

        <div class="news_second_3">


            <div class="news_exp">
                <p class="news_sub_title">创新使用者经验</p>

				<div>

					<div class="news_exp_desc">
						<p class="news_sub_detail">
						五月天的美国<br />可以重游旧地。<br />旅游心情真好。
						</p>

						<a href="#">
		                <img class="news_exp_more" src="<?php echo $this->staticUrl('news/index/more.jpg');?>" />
						</a>
					</div>
					<img class="news_exp_pic" src="<?php echo $this->staticUrl('news/index/news_second_3.jpg');?>" width="175"/>



				</div>
            </div>

        </div>

        <div  style="overflow:hidden;height: 1px;width: 1000px;background-color: #c2c4c8;clear: both;"></div>

    </div>

    <div style="clear:both"></div>

<div id="search_list" class="long_news" style="margin-top:20px">



    <?php $i = 1;foreach($models as $model){ if($i%2==1){?>
<!--    // 显示一个模型-->
        <div style="padding:20px 0px;float: left">
                <div class="words" style="width:530px;float: left;line-height: 25px;">
                        <p style="font-size:18px;font-weight: bold;text-align:center"><?php echo $model->title; ?></p>
                        <p style="font-size:14px;margin-top: 14px;"><?php echo $model->outline; ?> </p>

                </div>
                <div class="photo" style="float: left;margin-left: 150px;">
                    <img src="<?php echo $this->staticUrl('news/newsList/latestNews/'.$model->image_name);?>" />
                </div>
        </div>


   <?php  }else{  ?>

        <div style="padding:20px 0px;float: left">
                <div class="photo" style="float: left;">
                    <img src="<?php echo $this->staticUrl('news/newsList/latestNews/'.$model->image_name);?>" />
                </div>
                <div class="words" style="width:530px;float: left;margin-left: 150px;line-height: 25px;">
                        <p style="font-size:18px;font-weight: bold;text-align:center">COS发布会在京召开，各路豪杰相聚发布会，赞叹系统完美至极！</p>
                        <p style="font-size:14px;margin-top: 14px;">在HTC 2012年的年会上，HTC CEO周永明展示了一款神秘的手机。这款手机大家纷纷猜测可能看看看
                            看看看看看库顶顶顶顶顶顶顶顶短短的顶顶顶顶顶顶顶顶顶顶顶反反复复反反复复，顶顶顶顶顶顶顶顶短短的。</p>

                </div>

        </div>

    <?php } ?>
                <div  style="overflow:hidden;height: 1px;width: 1000px;background-color: #c2c4c8;clear: both;"></div>
    <?php $i++;}; ?>



</div>

<!-- ===========================翻页====================== -->

<div class="green-black">

    <?php

        $this->widget('MyLinkPager',array(
            'pages'=>$pages,
        ));
//$this->widget('zii.widgets.CListView', array(
//    'dataProvider'=>$dataProvider,
//    'itemView'=>'ajaxIndex',   // refers to the partial view named '_post'
////    'sortableAttributes'=>array(
////        'title',
////        'create_time'=>'Post Time',
////    ),
//));

//$this->widget('zii.widgets.CListView', array(
//    'dataProvider'=>$dataProvider,
//    'itemView'=>'ajaxIndex',
//    'pager'=>array(
//        'class'=>'CLinkPager',
//        'header'=>'Visit to page',
//        'firstPageLabel'=>'<<',
//        'prevPageLabel'=>'<',
//        'nextPageLabel'=>'>',
//        'lastPageLabel'=>'>>', ) ));
    ?>
</div>


</div>

<script>
    $(function(){
        $('.yiiPager a').click(function(){
            $.ajax({
                url:$(this).attr('href'),
                success:function(res){
                    $('#search_list').html(res);
//                    alert('dfad');
//                    $(this).parent().addClass('selected');
                }
            });
            return false;
        });
    });
</script>