<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
</div><!-- end container-right -->
</div>
</div><!-- end #body -->
<div class="line"></div>
<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('power by <a href="http://www.typecho.org">Typecho</a>'); ?>.<!-- 此行勿删 -->
    <?php _e('Theme by <a href="http://rootvip.cn/">山顶洞洞人</a>'); ?>.<!-- 此行勿删，请保留主题作者署名 -->
</footer><!-- end #footer -->

<?php $this->footer(); ?>
</div>
</div>
</body>
<script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/layer/layer.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/index.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/desktop.js'); ?>"></script>
</html>
