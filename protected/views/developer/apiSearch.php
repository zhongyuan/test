<style>
    .form_search{
        width: 100%;
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
    .gsc-tabhInactive{
    text-decoration: none;
    color: #258AAF;
    border: solid 1px #DADADA;
    }
    .gsc-tabHeader {
    margin-right: 2px;
    margin-top: 2px;
    padding: 3px 6px;
    position: relative;
    width: auto;
    display: block;
    }
    .gsc-tabhInactive {
    border-left: 1px solid #e9e9e9;
    border-right: 1px solid #e9e9e9;
    border-top: 2px solid #e9e9e9;
    background: #e9e9e9;
    color: #676767;
    cursor: pointer;
    }

    .gsc-tabhActive, .gsc-tabHeader:hover {
    color: #fff;
    background-color: #09C;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#2faddb', EndColorStr='#09c');
    border: 1px solid #3990AB;
    z-index: 100;
    }

    .result_cont2 li:hover{
        font-weight: 500;
        color: #0099cc;
        background-color: rgba(242, 242, 242, 0.57);
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
<div class="form_search">
    <div class="left_nav">
        <a href="<?php echo $this->createUrl('developer/apiFormSearch',array('search_api'=>$search_api,'type'=>1)); ?>">
            <div class="gsc-tabHeader gsc-tabhInactive gsc-inline-block <?php echo $type==1?'gsc-tabhActive':'';?>">Training</div>
        </a>
        <a href="<?php echo $this->createUrl('developer/apiFormSearch',array('search_api'=>$search_api,'type'=>2)); ?>">
            <div class="gsc-tabHeader gsc-tabhInactive gsc-inline-block <?php echo $type==2?'gsc-tabhActive':'';?>">Developer Guides</div>
        </a>
        <a href="<?php echo $this->createUrl('developer/apiFormSearch',array('search_api'=>$search_api,'type'=>3)); ?>">
            <div class="gsc-tabHeader gsc-tabhInactive gsc-inline-block <?php echo $type==3?'gsc-tabhActive':'';?>">API Reference</div>
        </a>
    </div>
    <div class="right_cont">
            <ul class="result_cont2">
                <?php if(count($results)>0){ ?>
                    <?php foreach($results as $res): ?>
                        <a href="<?php echo $this->createUrl("developer/$action",array('id' =>$res->id)); ?>"><li class="list_search"><?php echo $res->name; ?></li></a>
                    <?php endforeach; ?>
                <?php }else{?>
                        <li>你搜索的关键字，没有结果。</li>
                <?php }?>
            </ul>
    </div>
</div>

<div class="green-black">

    <?php $this->widget('MyLinkPager', array(
        'pages' => $pages,
		'maxButtonCount' =>5
    )) ?>
</div>
