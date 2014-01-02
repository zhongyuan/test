<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/newsIndex.css"  />
<div>

      <!--  Outer wrapper for presentation only, this can be anything you like -->
	  <div class="big_banner">
	  	<div class="frm">
			<div class="content">
				<img src="<?php echo $this->staticUrl('partner/cooperation_banner.jpg');?>"/>
			</div>
		</div>
	 </div>
      <!-- End outer wrapper -->


	


    <div style="clear:both"></div>

    <div id ="replace">
        <ul class="plogo">
			
			<li><img src="<?php echo $this->staticUrl('partner/cooperation_list_dazhihui.jpg');?>" /></li>
			<li><img src="<?php echo $this->staticUrl('partner/cooperation_list_dongyou.jpg');?>" /></li>
			<li><img src="<?php echo $this->staticUrl('partner/cooperation_list_zhongxing.jpg');?>" /></li>
			<?php for($i = 0;$i<9;$i++):?>
			<li><img src="<?php echo $this->staticUrl('partner/cooperation_list_sample.jpg');?>" /></li>
			<?php endfor;?>
		</ul>

    </div>
</div>

