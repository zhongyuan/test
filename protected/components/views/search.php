
    <style>
    .cf:before, .cf:after{
      content:"";
      display:table;
    }
    .cf:after{
      clear:both;
    }
    .cf{
      zoom:1;
    }

    .form-wrapper {
        width: 550px;
        padding: 7px;
        margin: 10px auto;
        background: #f2f2f2;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        -moz-box-shadow: 0 1px 1px rgba(0,0,0,.4) inset, 0 1px 0 rgba(255,255,255,.2);
        -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.4) inset, 0 1px 0 rgba(255,255,255,.2);
        box-shadow: 0 1px 1px rgba(0,0,0,.4) inset, 0 1px 0 rgba(255,255,255,.2);
    }

    .form-wrapper input {
        width: 430px;
        height: 10px;
        padding: 10px 5px;
        float: left;
        font: bold 15px 'lucida sans', 'trebuchet MS', 'Tahoma';
        border: 0;
        background: rgba(255, 255, 255, 0.86);
        -moz-border-radius: 3px 0 0 3px;
        -webkit-border-radius: 3px 0 0 3px;
        border-radius: 3px 0 0 3px;
    }

    .form-wrapper input:focus {
        outline: 0;
        background: #fff;
        -moz-box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
        -webkit-box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
        box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
    }

    .form-wrapper input::-webkit-input-placeholder {
       color: #999;
       font-weight: normal;
       font-style: italic;
    }

    .form-wrapper input:-moz-placeholder {
        color: #999;
        font-weight: normal;
        font-style: italic;
    }

    .form-wrapper input:-ms-input-placeholder {
        color: #999;
        font-weight: normal;
        font-style: italic;
    }

    .form-wrapper button {
		overflow: visible;
        position: relative;
        float: right;
        border: 0;
        padding: 0;
        cursor: pointer;
        height: 30px;
        width: 110px;
        font: bold 15px/30px 'lucida sans', 'trebuchet MS', 'Tahoma';
        color: #fff;
        text-transform: uppercase;
        background: rgb(255, 173, 47);;
        -moz-border-radius: 0 3px 3px 0;
        -webkit-border-radius: 0 3px 3px 0;
        border-radius: 0 5px 5px 0;
        text-shadow: 0 -1px 0 rgba(0, 0 ,0, .3);
    }

    .form-wrapper button:hover{
        background: rgb(255, 167, 31);
    }

    .form-wrapper button:active,
    .form-wrapper button:focus{
        background: rgb(255, 167, 31);
    }

    .form-wrapper button:before {
        content: '';
        position: absolute;
        border-width: 8px 8px 8px 0;
        border-style: solid solid solid none;
        border-color: transparent rgb(255, 173, 47); transparent;
        top: 8px;
        left: -6px;
    }

    .form-wrapper button:hover:before{
        border-right-color: rgb(255, 167, 31);
    }

    .form-wrapper button:focus:before{
        border-right-color: rgb(255, 167, 31);
    }

    .form-wrapper button::-moz-focus-inner {
        border: 0;
        padding: 0;
    }

    .result_pane{
		display: none;
		position: absolute;
		width: 400px;
        height: auto;
        max-height:800px;
		background: rgba(252, 252, 252, 1);
        top: 20%;
        left: 32%;
        opacity: 0.96;
    }
    .search_item:hover{
        font-weight: 500;
        color: #0099cc;
        background-color: rgba(242, 242, 242, 0.57);
    }
    .result_cont{
        font-size: 14px;
        color: black;
        text-align: left;
        font-family: dotum, Verdana, Arial, Helvetica, AppleGothic, sans-serif;
    }
    </style>

    <form class="form-wrapper cf" action="<?php echo Yii::app()->createUrl('developer/apiFormSearch',array('type'=>$type));?>" method="get">
	<input id="search_api" name="search_api" type="text" placeholder="Search here..." required>
	<button type="submit" id="submit">Search</button>
</form>
    <div class="result_pane">
            <ul class="result_cont">
            </ul>
    </div>

<script>
    var demoIframe = $("#testIframe");
    demoIframe.bind("load", loadReady);

    $(function(){
        var data = <?php echo $json_clchild;?>;
        $('#search_api').keyup(function(){
            var text = $(this).val();
            if(text.length<=0){
                $('.result_pane').hide(300); return false;
            }
            var gMatches = new Array();
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
                highlight_autocomplete_result_labels(text);
                var content = '';
                for (i=0; i<gMatches.length ; i++) {
                    content += '<a href= "#_self"><li class="search_item" onclick=jump("'+encodeURIComponent(gMatches[i].path)+'");>'+gMatches[i].__hiname+'</li></a>';
                }
                $('.result_cont').append(content);
                $('.result_pane').show(300);
            }

            /* Add emphasis to part of string that matches query */
            function highlight_autocomplete_result_labels(query) {
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
            }
            return false;
        });

        $('body').click(function(){
            var display = $('.result_pane').css('display');
            if(display == 'block'){
                $(".result_cont a").remove(); //先删原有的
                $('.result_pane').hide(300);
            }
        });
        return false;
    });
    function jump(path){
        var server = "<?php echo Yii::app()->request->hostInfo;?>"+'/gaia_plugin2/';
        demoIframe.attr("src", server+decodeURIComponent(path));
        $(".result_cont a").remove(); //先删原有的
        $("#search_api").val('');
    }
	function loadReady() {
		var bodyH = demoIframe.contents().find("body").get(0).scrollHeight,
		htmlH = demoIframe.contents().find("html").get(0).scrollHeight,
		maxH = Math.max(bodyH, htmlH), minH = Math.min(bodyH, htmlH),
		h = demoIframe.height() >= maxH ? minH:maxH ;
		if (h < 530) h = 530;
		demoIframe.height(h);
	}
</script>

