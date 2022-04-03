<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="container pageaa">
	 <h1 class="entry_title"><?php $this->title() ?></h1>
		<p class="entry_data">
            <?php $this->date(); ?> 发布丨
            累积 <?php Postviews($this); ?>
        </p>
</div>
<article class="container">
    <div class="postcc">
<?php $this->content(); ?></div>
<?php if ($this->options->LicenseInfo !== '0'): ?>
</div></article>
<?php endif; ?>
<div class="container commentsdd">
<?php $this->need('comments.php'); ?></div>
<?php $this->need('footer.php'); ?>