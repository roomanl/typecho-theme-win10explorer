<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <Script>
         var iconcategory1="<?php $this->options->themeUrl('img/imageres_4.ico'); ?>";
         var iconcategory2="<?php $this->options->themeUrl('img/imageres_5.ico'); ?>";
    </script>

    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<div class="win10-main">
<div class="pc-icon">
<img class="mypc" src="<?php $this->options->themeUrl('img/imageres_2.ico'); ?>" />
<div>此电脑</div>
</div>
<div id="win10" class="win10-container win10-width">
<header id="header">
    <div class="win10-top" id="win10top">
    <?php if ($this->options->logoUrl): ?>
        <a id="logo" href="<?php $this->options->siteUrl(); ?>">
            <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
        </a>
    <?php else: ?>
        <a class="logo" href="<?php $this->options->siteUrl(); ?>">
            <img src="<?php $this->options->themeUrl('img/imageres_25.ico'); ?>" />
    <?php endif; ?>
    </a>
        <a class="logo-title" href="<?php $this->options->siteUrl(); ?>"><span><?php $this->options->title() ?></span></a>
        <div class="right-top">
            <img src="<?php $this->options->themeUrl('img/min.png'); ?>" />
            <img src="<?php $this->options->themeUrl('img/max.png'); ?>" />
            <img src="<?php $this->options->themeUrl('img/close.png'); ?>" />
        </div>
    </div>
    <nav class="nav-menu">
        <a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
        <?php while($pages->next()): ?>
        <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
        <?php endwhile; ?>
       
    </nav>
    <img class="more" src="<?php $this->options->themeUrl('img/more.png'); ?>" />
    <div class="line"></div>
    <div class="breadcrumbs">
        <div class="breadcrumbs-left">
            <img class="breadcrumbs-arrow arrow-left" onclick="javascript :history.back(-1)" src="<?php $this->options->themeUrl('img/arrow.png'); ?>" />
            <img class="breadcrumbs-arrow arrow-right" onclick="javascript :history.forward()" src="<?php $this->options->themeUrl('img/arrow.png'); ?>" />
            <img class="breadcrumbs-arrow arrow-top" onclick="javascript :history.back(-1)" src="<?php $this->options->themeUrl('img/arrow.png'); ?>" />
        </div>
        <div class="breadcrumbs-center">
            <a href="<?php $this->options->siteUrl(); ?>">
            <img src="<?php $this->options->themeUrl('img/imageres_5.ico'); ?>" />
                此网站>
            </a>
            <?php if($this->is('index')): ?> 最新文章
            <?php elseif($this->is('post') || $this->is('page')): ?>
                <?php $this->category('>'); ?>
                <span>> <?php $this->title() ?> </span>  
            <?php elseif($this->is('category')): ?> 
                <?php $this->category('>'); ?>
                <span class="archive-title">><?php $this->archiveTitle(array(
                    'category'  =>  _t('分类 %s 下的文章'),
                    'search'    =>  _t('包含关键字 %s 的文章'),
                    'tag'       =>  _t('标签 %s 下的文章'),
                    'author'    =>  _t('%s 发布的文章')
                    ), '', ''); ?></span>
            <?php endif; ?>
       
        </div>
        
        <div class="breadcrumbs-right">
            <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                <input type="text" id="s" name="s" class="text" placeholder="<?php _e('搜索'); ?>" />
                <button type="submit" class="submit">
                <img class="arrow-right" src="<?php $this->options->themeUrl('img/arrow.png'); ?>" />
                </button>
            </form>
        </div>
    </div>
    <div class="line"></div>
</header><!-- end #header -->
<div id="body">
    <div class="container">
        <?php $this->need('sidebar.php'); ?>
        <div class="container-right">

    
    
