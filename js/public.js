/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


//写个ajax函数
function ajaxJson(url,data,callfun)
{
    $.ajax({
        type:"POST",
        url:url,
        data:data,
        dataType:'json',
        success:callfun,
        error:function(){
            alert('ajax fail~');
        },
    });
}
////写个ajax去拿页面
//function ajaxJson(url,data,callfun)
//{
//    $.ajax({
//        type:"GET",
//        url:url,
//        data:data,
//        dataType:html,
//        success:callfun,
//        error:function(){
//            alert('ajax fail~');
//        },
//    });
//}
//好东西，加载iframe时，预判断iframe长度，避免滑动条 , 此处不需要加载，已经在search widget里面添加了
//	function loadReady()
//	{
//		var bodyH = demoIframe.contents().find("body").get(0).scrollHeight,
//		htmlH = demoIframe.contents().find("html").get(0).scrollHeight,
//		maxH = Math.max(bodyH, htmlH), minH = Math.min(bodyH, htmlH),
//		h = demoIframe.height() >= maxH ? minH:maxH ;
//		if (h < 530) h = 530;
//		demoIframe.height(h);
//	}

//高亮显示部分字符串
//    function highlight_autocomplete_result_labels(query)
//    {
//        query = query || '';
//        if ((!gMatches || !gMatches.length) )
//          return;
//
//        var queryLower = query.toLowerCase();
//        var queryAlnumDot = (queryLower.match(/[\w\:]+/) || [''])[0];
//        var queryRE = new RegExp(
//            '(' + queryAlnumDot.replace(/\:/g, '\\:') + ')', 'ig');
//        for (var i=0; i<gMatches.length; i++) {
//            gMatches[i].__hiname = gMatches[i].name.replace(
//                queryRE, '<span style="color:rgb(255, 173, 47)">$1</span>');
//        }
//    }


//            $('.search_item').hover(
//                function(){
//                    $(this).addClass('item_selected');
//                },function(){
//                    $(this).removeClass('item_selected');
//                }
//            );

//            $('.result_cont li').mouseover(function() {
//                $('.result_cont li').removeClass('item_selected');
//                $(this).addClass('item_selected');
//                gSelectedColumn = $(".result_cont:visible").index($(this).closest('.result_cont'));
//                gSelectedIndex = $("li", $(".result_cont:visible")[gSelectedColumn]).index(this);
//            });
