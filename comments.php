<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
        <div style="clear:both;"></div>
    	<h4 id="response"><?php _e('添加新评论'); ?></h4>
        <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <p>
                <textarea rows="8" cols="50" name="text" id="textarea" class="textarea" required ><?php $this->remember('text'); ?></textarea>
            </p>
            <div style="height:30px">
            <?php if($this->user->hasLogin()): ?>
    		<p class="comment-userinfo"><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
    		<p class="comment-user-input">
    			<input type="text" name="author" id="author" class="text" placeholder="昵称" value="<?php $this->remember('author'); ?>" required />
    		</p>
    		<!-- <p class="comment-user-input">
    			<input type="email" name="mail" id="mail" class="text" placeholder="Email" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
    		</p> -->
    		<!-- <p class="comment-user-input">
    			<input type="url" name="url" id="url" class="text" placeholder="网站" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
    		</p> -->
            <?php endif; ?>

    		<p class="comment-user-submit" style="text-align: right;">
                <button type="submit" class="submit"><?php _e('提交'); ?></button>
            </p>
                </div>
    	</form>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>

    <?php if ($comments->have()): ?>
	<h4 class=""><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('共有 %d 条评论')); ?></h4>
    <div class="line"></div>
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>
</div>
