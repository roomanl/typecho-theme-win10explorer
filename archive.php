<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

 
       
        <?php if ($this->have()): ?>
            <div class="table-head">
				<div class="table-head-title table-head-col">名称</div>
				<div class="table-head-time table-head-col">修改日期</div>
				<div class="table-head-type table-head-col">类型</div>
			</div>
			<?php while($this->next()): ?>
				<a href="<?php $this->permalink() ?>">
					<div class="archive-title">
						<div class="table-head-title">
							<img src="<?php $this->options->themeUrl('img/txt.png'); ?>" />
							<?php $this->title() ?>
						</div>
						<div class="table-head-time"><?php $this->date(); ?></div>
						<div class="table-head-type"><?php $this->category(','); ?></div>
					</div>
				</a>
			<?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <p style="text-align: center;color:#888;"><?php _e('没有找到内容'); ?></p>
            </article>
        <?php endif; ?>

        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>

	<?php $this->need('footer.php'); ?>
