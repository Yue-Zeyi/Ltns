<?php
/**
 * 友链
 *
 * @package custom
 */
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<?php Breadcrumbs($this); ?>
<div class="container postdd"><h1 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1></div>
<?php Breadcrumbs($this); ?>
<article class="container postcc">
<?php $this->content(); ?>
<ul class="links">
<?php if ($this->options->InsideLinksIcon): ?>
<script>function erroricon(obj){var a=obj.parentNode,i=document.createElement("i");i.appendChild(document.createTextNode("★"));a.removeChild(obj);a.insertBefore(i,a.childNodes[0])}</script>
<?php endif; ?>
<?php Links($this->options->InsideLinksSort, $this->options->InsideLinksIcon ? 1 : 0); ?>
</ul>
</div>
</article>
</div>
<div class="container commentsdd">
<?php $this->need('comments.php'); ?></div> 
<?php $this->need('footer.php'); ?>