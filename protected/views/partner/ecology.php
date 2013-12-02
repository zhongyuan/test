<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/newsIndex.css"  />
<div>

      <!--  Outer wrapper for presentation only, this can be anything you like -->
      <img src="<?php echo $this->staticUrl('partner/cooperation_banner.jpg');?>"/>
      <!-- End outer wrapper -->


	


    <div style="clear:both"></div>

    <div id ="replace">
        <ul class="plogo">
			<?php for($i = 0;$i<12;$i++):?>
			<li><img src="<?php echo $this->staticUrl('partner/cooperation_list_sample.jpg');?>" /></li>
			<?php endfor;?>
		</ul>

    </div>
</div>

