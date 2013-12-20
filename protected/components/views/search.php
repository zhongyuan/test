

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/dev_search_jscrollpane.css" type="text/css">

<div class="devep_search">
    <form class="form-wrapper cf" onkeydown="if(event.keyCode==13&&gSelectedIndex>=0){return false;}" action="<?php  echo Yii::app()->createUrl('developer/apiFormSearch',array('type'=>$type));?>" method="get" >
        <input id="search_api" name="search_api" type="text" placeholder="Search here..." required>
        <button type="submit" id="submit">Search</button>
    </form>
    
    <div class="control_posi">
        <div class="result_pane">
                <ul class="result_cont">
                </ul>
        </div>
    </div>
</div>
<script>
    var demoIframe = $("#testIframe");
    demoIframe.bind("load", loadReady);
    var gSelectedIndex = -1;
    var gSelectedColumn = -1;
    var gMatches = new Array();
    $(function(){
        var data = <?php echo $json_clchild;?>;
        $('#search_api').keyup(function(event){
            var text = $(this).val();
            if(text.length<=0){
                $('.result_pane').hide(300); return false;
            }
            //键类型判断
            if(event.keyCode == 13){
                    if(gSelectedIndex < 0){
                        return true;
                    }else{
                        $(".result_cont li:eq("+gSelectedIndex+")").click();
                        return false;
                    }
            }else if(event.which == 38){ //向上
                if(gSelectedIndex-1 >= 0){
                    gSelectedIndex--;
                    $('.search_item').removeClass('item_selected');
                    $(".result_cont li:eq("+gSelectedIndex+")").addClass('item_selected');
                }else{
                    gSelectedIndex = -1;
                    $('.search_item').removeClass('item_selected');
                }
                return false;

            }else if(event.which == 40){ //向下
                if(gSelectedIndex+1 < gMatches.length){
                    gSelectedIndex++;
                    $('.search_item').removeClass('item_selected');
                    $(".result_cont li:eq("+gSelectedIndex+")").addClass('item_selected');
                }else{
                    gSelectedIndex = -1;
                    $('.search_item').removeClass('item_selected');
                }
                return false;
            }else{
                gSelectedIndex = -1;
                gSelectedColumn = -1;
                gMatches = new Array();
            }

            var matchedCount = 0;
            var ROW_COUNT_FRAMEWORK = 15;
            // Search for class List matches
            for (var i=0; i<data.length; i++) {
                var s = data[i];
                if (text.length != 0 && s.name.toLowerCase().indexOf(text.toLowerCase()) != -1) {
                    gMatches[matchedCount] = s;
                    matchedCount++;
                    if(matchedCount > ROW_COUNT_FRAMEWORK){
                        break;
                    }
                }
            }

            //搞拼接
            $(".result_cont a").remove(); //先删原有的
            if (gMatches.length > 0) {
                gMatches = highlight_autocomplete_result_labels(text,gMatches);
                var content = '';
                for (i=0; i<gMatches.length ; i++) {
                    content += '<a href= "#_self"><li class="search_item" onclick=jump("'+encodeURIComponent(gMatches[i].path)+'");>'+gMatches[i].__hiname+'</li></a>';
                }
                $('.result_cont').append(content);
                $('.result_pane').show(300);
            }

            $('.result_cont li').mouseover(function() {
                $('.result_cont li').removeClass('item_selected');
                $(this).addClass('item_selected');
                gSelectedColumn = $(".result_cont:visible").index($(this).closest('.result_cont'));
                gSelectedIndex = $("li", $(".result_cont:visible")[gSelectedColumn]).index(this);
            });
        });

        $('body').click(function(){
            var display = $('.result_pane').css('display');
            if(display == 'block'){
                $(".result_cont a").remove(); //先删原有的
                $('.result_pane').hide(300);
            }
        });
    });

    /* Add emphasis to part of string that matches query */
    function highlight_autocomplete_result_labels(query,gMatches) {
        query = query || '';
        if ((!gMatches || !gMatches.length) )
          return;

        var queryLower = query.toLowerCase();
        var queryAlnumDot = (queryLower.match(/[\w\:]+/) || [''])[0];
        var queryRE = new RegExp(
            '(' + queryAlnumDot.replace(/\:/g, '\\:') + ')', 'ig');
        for (var i=0; i<gMatches.length; i++) {
            gMatches[i].__hiname = gMatches[i].name.replace(
                queryRE, '<span style="color:rgb(255, 173, 47)">$1</span>');
        }
        return gMatches;
    }

    function jump(path){
        var server = "<?php echo Yii::app()->request->hostInfo;?>"+'/gaia_plugin2/';
        demoIframe.attr("src", server+decodeURIComponent(path));
        $(".result_cont a").remove(); //先删原有的
        $("#search_api").val('');
    }
	function loadReady() {
		var bodyH = demoIframe.contents().find("body").get(0).scrollHeight;
		var htmlH = demoIframe.contents().find("html").get(0).scrollHeight;
		var maxH = Math.max(bodyH, htmlH);
        var minH = Math.min(bodyH, htmlH);
		var h = demoIframe.height() >= maxH ? minH:maxH;
		if (h < 530) h = 530;
		demoIframe.height(h);
	}
</script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery.mousewheel.js"></script>
