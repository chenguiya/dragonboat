<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('list_5');
block_get('21,22');?><?php include template('common/header'); $list = array();?><?php $wheresql = category_get_wheresql($cat);?><?php $list = category_get_list($cat, $wheresql, $page);?><div class="blank25"></div>
<div class="container">
<div class="index_pd cl">
<div class="index_left fl">
<!--龙舟新闻 start-->
<div class="widget new_main">
<div class="widget_hd"><?php echo $cat['catname'];?><a class="more_s" href="javascript:void(0);"></a></div>
<ul class="in_newlist"><?php if(is_array($list['list'])) foreach($list['list'] as $value) { $article_url = fetch_article_url($value);?><li>
<?php if($value['pic']) { ?><a href="<?php echo $article_url;?>" class="thumb" target="_blank"><img src="<?php echo $value['pic'];?>"></a><?php } ?>
<div class="info_rs">
<h3 class="title"><a href="<?php echo $article_url;?>" target="_block"><?php echo $value['title'];?></a></h3>
<p class="intro"><?php echo $value['dateline'];?></p>
<span class="posttime">2015-10-10</span>
<span class="author">作者：<?php echo $value['username'];?></span>
</div>
</li>
<?php } ?>                 
</ul>
</div>
<!--龙舟新闻 end-->
<?php if($list['multi']) { ?>
<!--加载更多 start-->
<!-- <div class="more_page"><a href="javascript:void(0);" class="ajax_more">加载更多</a></div> -->
<div class="more_page" totalpage="<?php echo $list['maxpages'];?>"><?php echo $list['multi'];?></div>
<!--加载更多 end-->
<?php } ?>
</div>
<div class="index_right fr">
<!--[diy=diy1]--><div id="diy1" class="area"><div id="frame4semYc" class="frame move-span cl frame-1"><div id="frame4semYc_left" class="column frame-1-c"><div id="frame4semYc_left_temp" class="move-span temp"></div><?php block_display('21');?><?php block_display('22');?></div></div></div><!--[/diy]-->	
</div>
</div>
</div><?php include template('common/footer'); ?>