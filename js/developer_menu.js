(function($) {
    $.fn.menu = function(b) {
        var c,
        item,
        httpAdress;
        b = jQuery.extend({
            Speed: 220,
            autostart: 1,
            autohide: 1,
        },
        b);
        c = $(this);
        item = c.children("ul").parent("li").children("a");
        httpAdress = window.location;
//        item.addClass("inactive");

        item.unbind('click').click(_item);
        
        if (b.autostart) {

            c.children("a").each(function() {
                
                //仅 有子节点的才能有图标
                if($(this).parent("li").children("ul")[0]){
                    $(this).addClass('up_icon');
                }              
                
//                if (this.href == httpAdress) {
//                    
//                    $(this).parent("li").parent("ul").slideDown(b.Speed, 
//                    function() {
//                        $(this).parent("li").children(".down_icon").removeAttr("class");
//                        $(this).parent("li").children("a").addClass("up_icon")
//
//                    })
//                }
            })
        }
        function _item() {
            var a = $(this);
            if (b.autohide) {  //点击另一个时，隐藏其中一个
                a.parent().parent().find(".down_icon").parent("li").children("ul").slideUp(b.Speed / 1.2, 
                function() {  
                    $(this).parent("li").children("a").removeAttr("class");
                    $(this).parent("li").children("a").attr("class", "up_icon");
                })
            }

            if (a.attr("class") == "up_icon") {
                a.parent("li").children("ul").slideDown(b.Speed, 
                function() {
                    a.removeAttr("class");
                    a.addClass("down_icon");
                    a.addClass("green-color");
                })
            }
            if (a.attr("class") == "down_icon") {
                a.removeAttr("class");
                a.addClass("up_icon");
                a.parent("li").children("ul").slideUp(b.Speed)
            }
//            if (a.attr("class") == "") {
////                a.addClass("green-color");
////                a.attr("class", "green-color");
//                $("#"+a.id).addClass("green-color");
//            }
        }
    }
})(jQuery);