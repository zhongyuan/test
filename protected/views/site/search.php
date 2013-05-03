<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<style>
    .search_dform{
        padding: 10px 120px;
    }
    #key_words{
        width: 450px;
        height: 26px;
        border-radius: 6px;
    }
    .button1{
    position: relative;
    top: -2px;
    left: -2px;
    padding: 3px 42px;
    font-size: 20px;
    background-color: #fafafa;/*eb8313*/   /* 登陆头标颜色 ed9d22    外边环的颜色f2f2f2     border-bottom:c3c3c3*/
    border: 1px solid rgba(230, 221, 221, 0.9);
    border-radius: 7px;
    }
    .input_border{
        display: inline-block;
        margin: 5px 35px;
        width: 126px;
        height: 30px;
        border-radius: 10px;
        border:5px solid #f2f2f2;
    }
    .result_null{
        display: block;
        font-size: 25px;
        margin: 20px 0px;
    }
    .search_remark{
        font-size: 14px;
    }
    .detail{
        margin-left: 18px;
    }
    .point{
        display: inline-block;
        width: 8px;
        height: 8px;
        border-radius: 4px;
        background: #999;
        margin: 5px;
        text-decoration: none;
    }
</style>
<div class="search_body">

    <?php if(!$result) {?>

    <div class="search_dform">
        <span class="result_null">抱歉，没有你想要的结果！</span>
        <input id="key_words" type="text"  name="keywords"  maxlength=30 />
        <span class="input_border"><input type="submit" class="button1" id="submit" value="搜索"></span>
        <div class="search_remark">
            <span>建议：</span>
            <ul class="detail">
                <li><span class="point"></span>检查输入是否正确</li>
                <li><span class="point"></span>简化输入词</li>
                <li><span class="point"></span>尝试其他相关词，如同义、近义词等</li>
                <li><span class="point"></span>阅读帮助</li>
            </ul>
        </div>
    </div>
    <?php } ?>



    <?php if($result){ ?>
    <div class="search_dform">
        <input id="key_words" type="text"  name="keywords"  maxlength=30 />
        <span class="input_border"><input type="submit" class="button1" id="submit" value="搜索"></span>
    </div>
    <div class="search_result">

    </div>
    <?php }?>
</div>