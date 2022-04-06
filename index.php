<?php
/**
 * 黑白极简、超轻量级文字主题。
 * <ul><li>适配Typecho1.2.0版本</li><li>详细说明：<a href="https://www.yuezeyi.com/ltns.html" target="_blank">Ltns【好久不见】</a></li></ul>
 *
 * @package Ltns Theme
 * @author 岳泽以
 * @version 1.1
 * @link https://www.yuezeyi.com
 */
/*顶部*/ 
 if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<?php  if ($this->options->Dbanner):?>
<div class="wrap banner posty">
	<div class="o-sliderContainer hasShadow" id="dowebokWrap">
		<div class="o-slider" id="dowebok">
			        <a class="o-slider--item" data-image="<?php $this->options->bannerUrl() ?>" href="<?php $this->options->bannera() ?>" target="_blank"></a>
		</div>
	</div>
</div>
<?php endif; ?>
    <!--文章-->
        <?php while($this->next()): ?>
        <div class="post">    
        <div class="container posty">
        <h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
        <ul class="entry_data">
            <li><?php $this->date(); ?></li>
            <li><?php $this->category(',', false); ?></li>
            <li><?php $this->commentsNum('暂无评论', '%d 条评论'); ?></li>
            <li><?php Postviews($this); ?></li>
        </ul>
            <div class="entry_text">
                <p><a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>"><?php $this->excerpt(108, '   ......'); ?></a></p>
            </div>
        </div>
        </div>
    <div class="container">
    <?php endwhile; ?>
    <section class="list-pager">
	<?php $this->pageLink('<i class="iconfont icon-left"></i>上一页'); ?>
	<?php $this->pageLink('下一页<i class="iconfont icon-right"></i>','next'); ?>
	<div class="clear">
	</section>
    </div>
    <div>
        <!--底部-->   

        <?php $this->need('footer.php'); ?>