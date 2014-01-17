<style>
    .form_search{
        width: 980px;
        min-height: 600px;
        max-height: 700px;
        margin: 10px auto;
        overflow: hidden;
    }
    .left_nav{
        display: inline-block;
        vertical-align: top;
        width: 24%;
    }
    .right_cont{
        display: inline-block;
        width: 75%;
    }
    .apis_list{
        width: 100%;
        margin-right: 2px;
        margin-top: 2px;
        padding: 5px 0px;
        background-color: #fafafa;
    }
    .apis_list:hover{
        font-weight: 500;
        color: #0099cc;
        background-color: #F3F2F2;
    }
    .item_active{
        font-weight: 500;
        color: #fff;
        background-color: #81D8F5;
    }
    .result_cont2 li:hover{
        font-weight: 500;
        color: #0099cc;
        background-color: #fafafa;
    }
    .result_cont2{
        margin-left: 10px;
        font-size: 14px;
        color: black;
        text-align: left;
        font-family: dotum, Verdana, Arial, Helvetica, AppleGothic, sans-serif;
    }
    .list_search{
        line-height: 30px;
    }
</style>
<div>
    <div class="form_search">
        <div class="left_nav">
            <a href="<?php echo $this->createUrl('developer/apiFormSearch',array('search_api'=>$search_api,'type'=>1)); ?>">
                <div class="apis_list <?php echo $type==1?'item_active':'';?>">培训</div>
            </a>
            <a href="<?php echo $this->createUrl('developer/apiFormSearch',array('search_api'=>$search_api,'type'=>2)); ?>">
                <div class="apis_list <?php echo $type==2?'item_active':'';?>">开发者指引</div>
            </a>
            <a href="<?php echo $this->createUrl('developer/apiFormSearch',array('search_api'=>$search_api,'type'=>3)); ?>">
                <div class="apis_list <?php echo $type==3?'item_active':'';?>">API参考</div>
            </a>
        </div>
        <div class="right_cont">
                <ul class="result_cont2">
                    <?php if(count($results)>0){ ?>
                        <?php foreach($results as $res): ?>
                            <a href="<?php echo $this->createUrl("developer/$action",array('id' =>$res->id)); ?>"><li class="list_search"><?php echo $res->name; ?></li></a>
                        <?php endforeach; ?>
                    <?php }else{?>
                            <li>你搜索的关键字，该模块下没有结果，试试其他模块有没有~</li>
                    <?php }?>
                </ul>
        </div>
    </div>
</div>

<div class="green-black">

    <?php $this->widget('MyLinkPager', array(
        'pages' => $pages,
		'maxButtonCount' =>5
    )) ?>
</div>
