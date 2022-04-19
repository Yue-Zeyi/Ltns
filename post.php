<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="container postaa">
	 <h1 class="entry_title"><?php $this->title() ?></h1>
		<ul class="entry_data">
            <li><?php $this->date(); ?></li>
            <li><?php $this->category(',', false); ?></li>
            <li><?php $this->commentsNum('暂无评论', '%d 条评论'); ?></li>
            <li><?php Postviews($this); ?></li>
        </ul>
</div>
<article class="container">
    <div class="postcc">
<?php
    $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i';
    $replacement = '<a href="$1" data-fancybox="gallery" /><img src="$1" alt="'.$this->title.'" title="点击放大图片"></a>';
    $content = preg_replace($pattern, $replacement, $this->content);
    echo $content;
?>
<div class="tt-fenge-end">
</div>
</div>
<p class="tags"><span>标签：</span><?php $this->tags(', ', true, 'none'); ?></p>
<?php if ($this->options->LicenseInfo !== '0'): ?>
    <div class="postcc">
<p class="license"><?php echo $this->options->LicenseInfo ? $this->options->LicenseInfo : '本作品采用 <a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank" rel="license nofollow">知识共享署名-相同方式共享 4.0 国际许可协议</a> 进行许可。' ?></p>
</div>
<?php endif; ?>
</article>
<div class="container postsx">
<ul>
<li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
<li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
</ul>
</div>
<div class="container commentsdd">
<?php $this->need('comments.php'); ?></div>
<?php $this->need('footer.php'); ?>