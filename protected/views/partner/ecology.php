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
			<?php if($dbLogo):?>
				<?php foreach($dbLogo as $item):?>
					<li>
					<a href="<?php echo empty($item['link']) ? "#" : $item['link'];?>" target="_blank">
					<img src="<?php echo $item['logo_url'];?>" title="<?php echo $item['name'];?>"/>
					</a>
					</li>
				<?php endforeach;?>
			<?php else:?>
				<?php foreach($logo as $el):?>
					<li><img src="<?php echo $this->staticUrl('partner/'.$el);?>" /></li>
				<?php endforeach;?>
			<?php endif;?>
			
		</ul>

    </div>
</div>

