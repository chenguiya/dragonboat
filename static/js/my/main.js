var jq = jQuery.noConflict();
jq(function(){
 //index
 jq('.fullSlide').slide({titCell:".layerhd li",mainCell:".layerbd",effect:"fold",autoPlay:true,startFun:function(i){
    jq(".fullSlide .layer_name span").eq(i).css("display","block").siblings().css("display","none");
 }});
 jq(".teamMain").slide( { mainCell:".team_bd ul",autoPage:true,effect:"left",scroll:7,vis:7,easing:"swing",delayTime:500,pnLoop:false,trigger:"click" });

});