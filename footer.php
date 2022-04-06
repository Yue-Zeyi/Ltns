<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<footer  class="container"  role="contentinfo">
    <p class="footerb">&copy; <?php echo date('Y'); ?>  <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a> Theme By <a href="https://www.yuezeyi.com/ltns.html" target="_blank">Ltns</a></p>
	<p class="footerb"><a href="http://beian.miit.gov.cn" class="icp" target="_blank" rel="noreferrer"><?php $this->options->ICPbeian(); ?></a></p>
</footer>
<?php $this->footer(); ?>
<?php if ($this->options->CustomContent): $this->options->CustomContent(); ?>
<?php endif; ?>
    <script src="<?php $this->options->themeUrl('js/jquery-1.11.3.min.js'); ?>"></script>
<?php  if ($this->options->Dbanner):?>    
    <script src="<?php $this->options->themeUrl('js/hammer.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/slider.js'); ?>"></script>    
<script>
$(function() {
	$('#dowebok').pbTouchSlider({
		slider_Wrap: '#dowebokWrap',
		slider_Drag: false,
		slider_Breakpoints: {
			default: {
				height: 200,
				 enabled : false
			},
			tablet : {
				height : 200,
				media : 1024,
				 enabled : false
			},
			smartphone : {
				height : 120,
				media : 768
			}
		},
		 slider_Dots: {
            enabled : false
        },
                slider_Arrows: {
            enabled : false
        }
	});
});
</script>
<?php endif; ?>
<?php  if ($this->options->Totop):?>
<script src="<?php $this->options->themeUrl('js/jquery.toTop.min.js'); ?>"></script>
<a class="to-top">▲</a>
<script>
$(function() {
	$('.to-top').toTop();
});
</script>
<?php endif; ?>
<?php  if ($this->options->Highlight):?>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.0/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<?php endif; ?>
</body>
</html>