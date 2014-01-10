<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<link rel="stylesheet" type="text/css" href="<?php echo $this->staticUrl('newsIndex.css','css');?>"  />
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
			<?php foreach($logo as $el):?>
				<li><img src="<?php echo $this->staticUrl('partner/'.$el);?>" /></li>
			<?php endforeach;?>
		</ul>

    </div>
</div>

