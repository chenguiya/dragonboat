<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('index');
block_get('9,10,11,12,13,15,16');?><?php include template('common/header'); ?><style id="diy_style" type="text/css"></style>
<div class="blank25"></div>
<div class="content">
<div class="index_pd cl">
<!--轮播 start-->
<div class="fullSlide" id="indexBanner">
<!--[diy=diy1]--><div id="diy1" class="area"><div id="frameH2Gp6x" class="frame move-span cl frame-1"><div id="frameH2Gp6x_left" class="column frame-1-c"><div id="frameH2Gp6x_left_temp" class="move-span temp"></div><?php block_display('9');?></div></div></div><!--[/diy]-->
</div>
<!--轮播 end-->
<!--协会公告 start-->
<div class="widget in_notice">
<div class="widget_hd">协会公告<a class="more_s" href=""></a></div>
<ul class="widget_bd in_notice_bd">
<!--[diy=diy2]--><div id="diy2" class="area"><div id="frame73EIzH" class="frame move-span cl frame-1"><div id="frame73EIzH_left" class="column frame-1-c"><div id="frame73EIzH_left_temp" class="move-span temp"></div><?php block_display('10');?></div></div></div><!--[/diy]-->                   
</ul>
</div>
<!--协会公告 end-->
</div>
     <!--龙舟之队 start-->
     <!--[diy=diy3]--><div id="diy3" class="area"><div id="frameI3e65R" class="frame move-span cl frame-1"><div id="frameI3e65R_left" class="column frame-1-c"><div id="frameI3e65R_left_temp" class="move-span temp"></div><?php block_display('11');?></div></div></div><!--[/diy]-->     
     <!--龙舟之队 end-->
     <div class="index_pd cl">
          <div class="index_left fl">
               <!--龙舟新闻 start-->
               <!--[diy=diy4]--><div id="diy4" class="area"><div id="frame7dT711" class="frame move-span cl frame-1"><div id="frame7dT711_left" class="column frame-1-c"><div id="frame7dT711_left_temp" class="move-span temp"></div><?php block_display('12');?></div></div></div><!--[/diy]-->               
               <!--龙舟新闻 end-->
               <!--加载更多 start-->
               <div class="more_page"><a href="javascript:void(0);" class="ajax_more">加载更多</a></div>
               <!--加载更多 end-->
          </div>
          <div class="index_right fr">
               <!--比赛公告 start-->
               <div class="widget widcom">
                    <div class="widget_hd">比赛公告<a class="more_s" href=""></a></div>
                    <p class="widget_bd rule_img"><img src="<?php echo $_G['style']['tpldir'];?>/common/images/300.jpg" width="300" height="170"></p>
               </div>
               <!--比赛公告 end-->
               <!--[diy=diy5]--><div id="diy5" class="area"><div id="frame71UVvU" class="frame move-span cl frame-1"><div id="frame71UVvU_left" class="column frame-1-c"><div id="frame71UVvU_left_temp" class="move-span temp"></div><?php block_display('13');?><?php block_display('15');?><?php block_display('16');?></div></div></div><!--[/diy]-->                  
          </div>
          
     </div>
</div><?php include template('common/footer'); ?>