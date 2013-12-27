<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$this->widget('SearchWidget');
?>
	
<div class="content_wrap">

    <div class="devguide_left">
        <div class="drop_list_pin">
            <?php $this->widget('DropmenuWidget' ,array('view_data' => $view_data));?>
        </div>
    </div>
				
	<div class="devguide_right" id="htmlContent">
        <IFRAME ID="testIframe" Name="testIframe" FRAMEBORDER=0 SCROLLING=AUTO width=100%  height=100% SRC=""></IFRAME>
	</div>

</div>

<script>
$(function(){
    
    //自己写的  页面元素固定位置
	var box = $('.drop_list_pin');
	var btop = box.position().top; //获取对象，相对页定的高度
	var pos = box.css("position");

	$(window).scroll(function() {
		var scrolls = $(this).scrollTop();//获取窗口已经滚上去多少
		if (scrolls > btop) { //如果滚动到页面超出了当前元素box的相对页面顶部的高度
			if (window.XMLHttpRequest) { //如果不是ie6
				box.css({
					position: "fixed",
					top: 10
				})
			} else { //如果是ie6
				box.css({
					top: scrolls
				});	
			}
		}else {
			box.css({
				position: pos,
				top: top
			})
		}
	});

});

</script>
