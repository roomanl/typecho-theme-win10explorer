<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="container-left">
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
    <section class="widget">
        <a href="<?php $this->options->siteUrl(); ?>">
        <div class="container-left-title">
            <img class=""  src="<?php $this->options->themeUrl('img/imageres_2.ico'); ?>" />
            <span>此网站</span>
        </div>
        </a>
        <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
	</section>
    <?php endif; ?> 
</div><!-- end #sidebar -->
