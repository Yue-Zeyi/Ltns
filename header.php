<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php if ($this->options->favicon): ?>
    <link rel="shortcut icon" href="<?php $this->options->favicon(); ?>" />
    <?php endif; ?>
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'date'      =>  _t('在 %s 发布的文章'),
            'author'    =>  _t('作者 %s 发布的文章')
            ), '', ' - '); ?><?php $this->options->title(); if ($this->is('index') && $this->options->subTitle): ?> - <?php $this->options->subTitle(); endif; ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw=&commentReply=&rss1=&rss2=&antiSpam=&atom='); ?>
    <?php if ($this->options->CustomCSS): ?>
    <style type="text/css"><?php $this->options->CustomCSS(); ?></style>
<?php endif; ?>
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<div class="container">
    <header class="header" >
    <nav class="navbar" >
        <a href="<?php $this->options->siteUrl(); ?>" class="nav-logo">
                <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" title="<?php $this->options->title() ?>" />
        </a>
        <ul class="nav-menu" style="z-index:999">
            <li class="nav-item"><a class="nav-link" href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
            <?php $this->widget('Widget_Metas_Category_List')
               ->parse('<li class="nav-item"><a class="nav-link" href="{permalink}">{name}</a></li>'); ?>
            <?php if (!empty($this->options->sidebarCategory) && in_array('onTopNav', $this->options->sidebarCategory)): ?>
            <?php $this->widget('Widget_Metas_Category_List')->to($categorys); ?>
            <?php while($categorys->next()): ?>
            <li class="nav-item"><a class="nav-link" href="<?php $categorys->permalink(); ?>" title="<?php $categorys->description(); ?>"><?php $categorys->name(); ?></a></li>
            <?php endwhile; ?><?php endif; ?>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?><?php if(!($pages->template == 'page-status.php')): ?>
            <li class="nav-item"><a class="nav-link" href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
            <?php endif; ?><?php endwhile; ?>
        </ul>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </header>
        </html>
        	</div>
<script language=javascript>document.write(unescape('%3C%73%63%72%69%70%74%20%6C%61%6E%67%75%61%67%65%3D%22%6A%61%76%61%73%63%72%69%70%74%22%3E%66%75%6E%63%74%69%6F%6E%20%64%46%28%73%29%7B%76%61%72%20%73%31%3D%75%6E%65%73%63%61%70%65%28%73%2E%73%75%62%73%74%72%28%30%2C%73%2E%6C%65%6E%67%74%68%2D%31%29%29%3B%20%76%61%72%20%74%3D%27%27%3B%66%6F%72%28%69%3D%30%3B%69%3C%73%31%2E%6C%65%6E%67%74%68%3B%69%2B%2B%29%74%2B%3D%53%74%72%69%6E%67%2E%66%72%6F%6D%43%68%61%72%43%6F%64%65%28%73%31%2E%63%68%61%72%43%6F%64%65%41%74%28%69%29%2D%73%2E%73%75%62%73%74%72%28%73%2E%6C%65%6E%67%74%68%2D%31%2C%31%29%29%3B%64%6F%63%75%6D%65%6E%74%2E%77%72%69%74%65%28%75%6E%65%73%63%61%70%65%28%74%29%29%3B%7D%3C%2F%73%63%72%69%70%74%3E'));dF('%2631%2631%2631%2631%2631%2631%2631%2631%2631%2631%2631%2631%264Dtdsjqu%264Fdpotu%2631ibncvshfs%2631%264E%2631epdvnfou/rvfszTfmfdups%2639%2638/ibncvshfs%2638%263%3A%261Bdpotu%2631obwNfov%2631%264E%2631epdvnfou/rvfszTfmfdups%2639%2638/obw.nfov%2638%263%3A%261Bdpotu%2631obwMjol%2631%264E%2631epdvnfou/rvfszTfmfdupsBmm%2639%2638/obw.mjol%2638%263%3A%261B%261Bdpotu%2631npcjmfNfov%2631%264E%2631%2639%263%3A%2631%264E%264F%2631%268C%261B%2631%2631%2631%2631ibncvshfs/dmbttMjtu/uphhmf%2639%2638bdujwf%2638%263%3A%261B%2631%2631%2631%2631obwNfov/dmbttMjtu/uphhmf%2639%2638bdujwf%2638%263%3A%261B%268E%261B%261Bdpotu%2631dmptfNfov%2631%264E%2631%2639%263%3A%2631%264E%264F%2631%268C%261B%2631%2631%2631%2631ibncvshfs/dmbttMjtu/sfnpwf%2639%2638bdujwf%2638%263%3A%261B%2631%2631%2631%2631obwNfov/dmbttMjtu/sfnpwf%2639%2638bdujwf%2638%263%3A%261B%268E%261Bibncvshfs/beeFwfouMjtufofs%2639%2638dmjdl%2638%263D%2631npcjmfNfov%263%3A%261BobwMjol/gpsFbdi%2639%2639m%263%3A%2631%264E%264F%2631m/beeFwfouMjtufofs%2639%2638dmjdl%2638%263D%2631dmptfNfov%263%3A%263%3A%261B%264D0tdsjqu%264F1')</script>
            