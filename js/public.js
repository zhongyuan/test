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