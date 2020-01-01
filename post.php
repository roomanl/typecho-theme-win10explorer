<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
	
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
        <ul class="post-meta">
            <li ><?php $this->author(); ?></li>
            <li><?php $this->date(); ?></li>
        </ul>
        <ul class="post-near">
            <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
            <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
        </ul>
    <?php $this->need('comments.php'); ?>
    </article>
			
<?php $this->need('footer.php'); ?>
