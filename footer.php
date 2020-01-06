<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
</div><!-- end container-right -->
</div>
</div><!-- end #body -->
<div class="line"></div>
<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('power by <a href="http://www.typecho.org">Typecho</a>'); ?>.
    <?php _e('Theme by <a href="http://rootvip.cn/">山顶洞洞人</a>'); ?>.
</footer><!-- end #footer -->

<?php $this->footer(); ?>
</div>
</div>
</body>
<script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/index.js'); ?>"></script>
</html>
