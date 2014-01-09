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


	<div class="pn_container">
		<div class="short_news pn_adv">
	        <div class="pn_one">
	            <div><img src="<?php echo $this->staticUrl('partner/cooperation_contact_pic_1.jpg');?>"/></div>
	            <div class="pn_business">
	                <p class="font_4 news_sub_title">移动设备</p>
	                <p class="news_sub_detail">
						王先生<br />021-58550898-8153<br />WerderWang@china-liantong.com
					</p>

	              
	            </div>

	        </div>

	        <div class="pn_one_split"></div>

	        <div class="pn_two">
	            <div><img src="<?php echo $this->staticUrl('partner/cooperation_contact_pic_2.jpg');?>"/></div>

	            <div class="pn_dev">
	                <p class="font_4 news_sub_title">智能机顶盒</p>
	                <p class="news_sub_detail">
						张小姐<br />021-58550898-8040<br />SonyaChang@china-liantong.com
					</p>

	             
	            </div>
	        </div>

	        <div class="pn_two_split"></div>

	        <div class="pn_three">
				<div><img src="<?php echo $this->staticUrl('partner/cooperation_contact_pic_3.jpg');?>"/></div>
	            <div class="pn_info">
					
					
						<p class="font_4 news_sub_title">应用商店</p>
						<p class="news_sub_detail">
						许小姐<br />021-58550898-8044<br />NancyXu@china-liantong.com
						</p>

						
	            </div>
	        </div>

	    </div>
	</div>


    <div style="clear:both"></div>

    <div>
        <div class="plist_container" id ="replace">
		
			<?php 
				 $idx = 0;
				 foreach($models as $m):
					$idx++;
					if($idx%2 == 0):?>
					<!--<div class="nlist">
						<div class="pleft c_left">
							<h1><a href="<?php echo $this->createUrl('partner/detail',array('news_id'=>$m->id));?>" target="_blank"><?php echo $m->title;?></a></h1>
							<p><?php echo $m->outline;?></p>
						</div>
						<img src="<?php echo $m->image_name;?>" class="rgt"/>
						<div><img src="<?php echo $this->staticUrl('div_split.jpg');?>"/></div>
			        </div>-->
					
					<div class="plist">
							<div class="pleft htc_info">
		                            <p>
									<?php echo $m->outline;?>
									</p>
									<div class="read_more"><a href="<?php echo $this->createUrl('partner/detail',array('news_id'=>$m->id));?>" target="_blank">[阅读更多]</a></div>

		                    </div>
							<img src="<?php echo $m->image_name;?>"  class="htc"/>   
		            </div>
					<div><img src="<?php echo $this->staticUrl('div_split.jpg');?>"/></div>
			
			
			<?php	else:?>
					<div class="plist">
		                    <img src="<?php echo $m->image_name;?>"  class="via"/>
		                    <div class="pright via_info">
		                            <p>
									<?php echo $m->outline;?>
									</p>
									<div class="read_more"><a href="<?php echo $this->createUrl('partner/detail',array('news_id'=>$m->id));?>" target="_blank">[阅读更多]</a></div>
		                    </div>

		            </div>
					<div><img src="<?php echo $this->staticUrl('div_split.jpg');?>"/></div>
			
					
			<?php	endif;?>
			<?php endforeach;?>
			<!--<div class="plist">
                    <img src="<?php echo $this->staticUrl('partner/cooperation_company_zky.jpg');?>" class="zky"/>
                    <div class="pright zky_info">
							<p>
							中国科学院（Chinese Academy of Sciences）是中国在科学技术方面的最高学术机构和中国自然科学与高新技术的综合研究与发展中心。
							中国科学院以中国富强、人民幸福为已任，为中国科技进步、经济社会发展和国家安全做出了不可替代的重要贡献
							</p>
							<p>
							中国科学院（Chinese Academy of Sciences）是中国在科学技术方面的最高学术机构和中国自然科学与高新技术的综合研究与发展中心。
							中国科学院以中国富强、人民幸福为已任，为中国科技进步、经济社会发展和国家安全做出了不可替代的重要贡献中国科学院（Chinese Academy of Sciences）是中国在科学技术方面的最高学术机构和中国自然科学与高新技术的综合研究与发展中心。
							中国科学院以中国富强、人民幸福为已任，为中国科技进步、经济社会发展和国家安全做出了不可替代的重要贡献
							</p>
							<div class="read_more"><a href="#">[阅读更多]</a></div>
                    </div>

            </div>
			<div class="split"></div>
			
			<div class="plist">
					<div class="pleft htc_info">
                            <p>
							宏达国际电子股份有限公司成立于1997年5月15日，由被誉为台湾的“经营之神”的王永庆之女王雪红任董事长，董事暨宏达基金会董事长卓火土，与总经理兼执行长周永明所创立。</p>
							<p>宏达国际电子股份有限公司，简称宏达电子，品牌为“HTC”。是一家位于台湾的手机与平板电脑制造商。是全球最大的Windows Mobile智能手机生产厂商，全球最大的智能手机代工和生产厂商。
							</p>
							<div class="read_more"><a href="#">[阅读更多]</a></div>

                    </div>
					<img src="<?php echo $this->staticUrl('partner/cooperation_company_htc.jpg');?>"  class="htc"/>   
            </div>
			<div class="split"></div>	
			
			
			<div class="plist">
                    <img src="<?php echo $this->staticUrl('partner/cooperation_company_via.jpg');?>"  class="via"/>
                    <div class="pright via_info">
                            <p>
							威盛电子股份有限公司(VIA Technologies)，是台湾地区的积体电路设计公司，主要生产主机板的晶片组、中央处理器(CPU)、以及记忆体。它是世界上最大的独立主机板晶片组设计公司。作为一个无晶圆厂半导体厂商（fabless），VIA主要在研究与发展他的晶片组，然后将晶圆制造外包给晶圆厂进行 (像是台湾积体电路制造股份有限公司 en:TSMC)。
							</p>
							<div class="read_more"><a href="#">[阅读更多]</a></div>
                    </div>

            </div>
			<div class="split"></div>
			
			
			<div class="plist">
                    <div class="pleft s3_info">
                            <p>
							一家老牌显卡厂商，在3DFX王朝尚未成熟之前，S3牢牢占据了绝大多数的市场份额，成为当之无愧的业界第一品牌。后来，因为技术、市场和驱动的原因于2000年4月11日被VIA电子收购，退出独立显卡市场，转向集成显卡和移动显卡。在经历了长达3年的蛰伏之后于2003年推出 DeltaChrome 系列显卡。该系列拥有超低能耗、优秀的HDTV播放能力和出色的2D性能在市场上独树一帜。但是由于技术和市场推广的原因，至今在独立显卡市场上无所作为。DeltaChrome系列显卡已经发展了三代从最初的S8到S18再到现在的S27，但性能不及N卡和A卡。</p>
							<div class="read_more"><a href="#">[阅读更多]</a></div>
                    </div>
					<img src="<?php echo $this->staticUrl('partner/cooperation_company_s3.jpg');?>"  class="s3"/>
            </div>-->
			 <div class="green-black">
		            <?php
		                $this->widget('MyLinkPager',array(
		                    'pages'=>$pages,
		                ));
		            ?>
		      </div>
        </div>

<!-- ===========================翻页====================== -->

	  
    </div>
</div>

<script>
    $(function(){
		
        $('.yiiPager a').click(function(){
            $.ajax({
                url:$(this).attr('href'),
                success:function(res){
                    $('#replace').html(res);
                }
            });
            return false;
        });
    });
</script>

