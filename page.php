<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
        <?php $this->need('comments.php'); ?>
    </article>
<?php $this->need('footer.php'); ?>
