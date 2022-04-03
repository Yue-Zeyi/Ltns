<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="container postdd">
<a href="<?php $this->options->siteUrl(); ?>">首页</a> &raquo; <?php $this->archiveTitle(array(
'category'  =>  _t('分类【%s】下的文章'),
'search'    =>  _t('包含关键字【%s】的文章'),
'tag'       =>  _t('标签【%s】下的文章'),
'date'      =>  _t('在【%s】发布的文章'),
'author'    =>  _t('作者【%s】发布的文章')
), '', ''); ?></div>
<div class="container">
<?php if ($this->have()): ?>
<?php while($this->next()): ?>
<div class="posty">
<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
<ul class="entry_data">
<li><?php $this->date(); ?></li>
<li><?php $this->category(',', false); ?></li>
<li><?php $this->commentsNum('暂无评论', '%d 条评论'); ?></li>
<li><?php Postviews($this); ?></li>
</ul>
      <div class="entry_text">
                <p><a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>"><?php $this->excerpt(100, '   ......'); ?></a></p>
            </div>
        </div> </div>
    <div class="container">
    <?php endwhile; ?>
    <section class="list-pager">
	<?php $this->pageLink('<i class="iconfont icon-left"></i> 上一页'); ?>
	<?php $this->pageLink('下一页<i class="iconfont icon-right"></i>','next'); ?>
	<div class="clear">
	</section>
    </div>
       <?php endif; ?>
<?php $this->need('footer.php'); ?>