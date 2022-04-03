<?php
/**
 * 归档
 *
 * @package custom
 */
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="container postdd"><h1 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1></div>
<?php Breadcrumbs($this); ?>
<article class="container postcc">

<?php
$this->widget('Widget_Contents_Post_Recent', 'pageSize='.Typecho_Widget::widget('Widget_Stat')->publishedPostsNum)->to($archives);
$year=0;
$output = '<div id="archives">';
while($archives->next()){
	$year_tmp = date('Y',$archives->created);
	if ($year > $year_tmp) {
		$output .= '</ul>';
	}
	if ($year != $year_tmp) {
		$year = $year_tmp;
		$output .= '<h2>'.date('Y 年',$archives->created).'</h2><ul>';
	}
	if ($this->options->PjaxOption && $archives->hidden) {
		$output .= '<li>'.date('m-d：',$archives->created).'<a>'. $archives->title .'</a></li>';
	} else {
		$output .= '<li>'.date('m-d：',$archives->created).'<a href="'.$archives->permalink .'">'. $archives->title .'</a></li>';
	}
}
$output .= '</ul></div>';
echo $output;
?>
</article>
</div>
<?php $this->need('footer.php'); ?>