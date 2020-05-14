# typecho-theme-win10explorer
### typecho win10资源管理器主题<br/>
自适应手机，点击顶部可拖动窗口<br/>
把主题文件夹命名为win10explorer，放到usr\themes目录下，后台启用主题即可<br/>
[主题预览](http://rootvip.cn/)
### 还有
请保留作者署名<br/>

### 更新日志
#### 2020/04/02
实现右上角三个按钮的功能(最小化、最大化、关闭三个功能,最小化、最大化不适用手机)
#### 2020/02/26
导航栏目太多时，增加水平滚动
### 自定义前面文章的图标
如需自定义文章前面的图标需要提前准备好对应PNG图标。图标的名称以最后一级分类的名称命名，步骤如下：<br/>
1、把图标名称重命名。<br/>
分类只有一级目录，图标就命名为一级分类的名称<br/>
如果分类有多级则用最后一级分类名称命名。比如预览网站里，一级目录为“C”。二级目录有“python”、“java”、“android”分类。就需要把图标名称命名为python.png、java.png、android.png。名称有字母，字母全部用小写，中文和数字没有要求<br/>
2、把图标放在主题img目录里。<br/>
3、找到index.php和archive.php文件。把下图1部分代码删掉或注释，然后把2部分代码取消注释。<br/>
![](https://sddman.oss-cn-shenzhen.aliyuncs.com/typecho/win10/1.png)<br/>
1处代码为默认全部使用txt图标。
## License
Apache License 2.0