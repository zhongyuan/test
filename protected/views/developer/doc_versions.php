
<?php 
    $session = Yii::app()->session;
?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/doc_versions.css" />

<div class="allVersion_body">
    <?php foreach ($ver_kinds as $key => $versions) {?>
        <?php if(count($versions)>=1){ ?>
        <!--<div class="version_clas">-->
            <div class="classify inline_block"><?php echo $key; ?></div>
            <div class="tools_versi spanner_posi inline_block"></div>


        <div class="horizen"></div>
        <?php $id = 0;foreach($versions as $version){ $id++;?>
        <div class="date_list" >
            <div class ="di_sched" value="<?php echo $key.$id; ?>">
                <div id="leftvertical<?php echo $key.$id; ?>" class="vertical_line vertical_bg1"></div>
                <div class="category"><?php echo $version;?></div>
                <div id="anrow_po<?php echo $key.$id; ?>" class="tools_versi anrow_posi1 relative"></div>
            </div>
                <div class="version_list<?php echo $key.$id; ?>" style="display:none;">
                    <table class="hovertable">
                        <tr style="background-color:#F2F2F2">
                            <th >文档名称</th>
                            <th>类型</th> <th>发布人</th> <th>发布时间</th> <th>大小</th>
                            <th>下载</th>
                        </tr>
                        <?php $i=0; foreach ($ver_details[$key][$version] as  $doc_info) { $i++;?>
                        <tr class="<?php echo $i%2==1?'odd_bg':'even_bg';?>">
                            <td title="<?php echo $doc_info['doc_name']; ?>" class="vtip"><?php echo strlen($doc_info['doc_name'])>30?substr($doc_info['doc_name'], 0,28).'..':$doc_info['doc_name']; ?></td>
                            <td><?php echo $doc_types[$doc_info['type']]; ?></td>
                            <td><?php echo $doc_info['upload_name']; ?></td>
                            <td><?php echo date('Y-m-d',$doc_info['record_time']); ?></td>
                            <td><?php echo MCDoc::getFileSize($doc_info['size']);?></td>

                            <?php if($session['authority'] > $doc_info['available']){ ?>
                            <td><a class="ver_download" href="<?php echo $this->createUrl('developer/downLoad',array('id' =>$doc_info['id'])); ?>">下载</a></td>
                            <?php }else{?>
                            <td><a href="#_self">noAuth</a></td>
                            <?php }?>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
        </div>
        <?php } }?>
    <?php }?>
</div>

<script>
    $(function(){
        $('.di_sched').click(function(){
            var ver = $(this).attr('value');
            $('.version_list'+ver).slideToggle('slow');
            $('#anrow_po'+ver).toggleClass('anrow_posi2');
            $('#leftvertical'+ver).toggleClass('vertical_bg2');
        });
    });
</script>
