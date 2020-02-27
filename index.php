<?php
/**
 * win10资源管理器主题
 * git:https://github.com/roomanl/typecho-theme-win10explorer
 * 
 * @package win10explorer theme
 * @author 山顶洞洞人
 * @version 1.0
 * @link http://rootvip.cn/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
			<div class="table-head">
				<div class="table-head-title table-head-col">名称</div>
				<div class="table-head-time table-head-col">修改日期</div>
				<div class="table-head-type table-head-col">类型</div>
			</div>
			<div style="height:30px;"></div>
			<?php while($this->next()): ?>
				<a href="<?php $this->permalink() ?>">
					<div class="archive-title" title="<?php $this->title() ?>">
						<div class="table-head-title">
						<img src='<?php $this->options->themeUrl('img/txt.png'); ?>' />
						<!-- <img src='
							<?php
								$childType=getLastType($this);
								if(!$childType){
									$this->options->themeUrl('img/txt.png');
								}else{
									$this->options->themeUrl('img/'.strtolower($childType).'.png');
								}
							 ?>
							 ' /> -->
							<?php $this->title() ?>
						</div>
						<div class="table-head-time"><?php $this->date(); ?></div>
						<div class="table-head-type">
						<?php echo getLastType($this); ?>
						</div>
					</div>
					
				</a>
			<?php endwhile; ?>
			<div style="clear:both;"></div>
			<?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>

<?php $this->need('footer.php'); ?>
