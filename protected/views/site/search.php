<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/search.css"  />
<div class="search_body">

    <?php if(!$results) {?>
        <div class="search_dform">
            <span class="result_null">抱歉，没有你想要的结果！</span>
            <input id="key_words" type="text"  name="keywords"  maxlength=30 />
            <span class="input_border"><input type="submit" class="button1" id="sub_ser" value="搜索"></span>
            <div class="search_remark">
                <span>建议：</span>
                <ul class="detail">
                    <li><span class="point"></span>检查输入是否正确</li>
                    <li><span class="point"></span>简化输入词</li>
                    <li><span class="point"></span>尝试其他相关词，如同义、近义词等</li>
                </ul>
            </div>
        </div>
    <?php }else{ ?>
        <div class="search_dform">
            <input id="key_words" type="text"  name="keywords"  maxlength=60 />
            <span class="input_border"><input type="submit" class="button1" id="sub_ser" value="搜索"></span>
        </div>
        <div class="search_result">
            <?php foreach($results as $news_list){ ?>

                <p class="news_title"><?php echo str_ireplace($key,"<span class='key_color'>$key</span>",$news_list->title); ?></p>
                <span class="news_content"><?php echo $news_list->outline;?></span>
                <span class="news_date news_content"><?php echo date('Y-m-d',$news_list->record_time);?></span>

            <?php }?>
        </div>
    <?php }?>


    <div class="green-black">
        <?php
            $this->widget('MyLinkPager',array(
                'pages'=>$pages,
            ));
        ?>
    </div>

</div>

<script language="javascript" type="text/javascript">
    $(function(){
        $('#sub_ser').click(function(){
            search($('#key_words').val());
        });

        $('#key_words').bind('keypress',function(event){
            if(event.keyCode == "13")
            {
                search($('#key_words').val());
            }
        });
    });
    function search(key)
    {
        if(key.length<=0 || key.length>=30)
        {
            return false;
        }else{
            var url = "<?php echo Yii::app()->createUrl('site/search');?>"+"?key="+encodeURIComponent(key);
            window.location.href = url;
        }
    }
</script>