$(function(){
    initWin10Height();
    initMove()
    initLeftMenuIcon()
    //initArchiveType()
    $('.more').click(function(){
        $('.breadcrumbs').toggle(500)
        $('.container-left').toggle(500)
        setTimeout(() => {
            initWin10Height();
        }, 510);
    })
    //------------------------------------//
    var mini=false,oldW=$('.win10-width').width()
    var max=false,oldrw=$('.container-right').width()

    $('.right-top img').eq(0).on('click',function(){ 
        closeMax()
        if(mini){
            cloasMini()
        }else{
            mini=true
            $('.win10-container').css({height:'30px',width:'300px',top:'initial',left:'200px',bottom:'0'})
            $('#footer').hide()
            $('#body').hide()
            $('.nav-menu').hide()
            $('.breadcrumbs').hide()
        }  
    })
    
    $('.right-top img').eq(1).on('click',function(){ 
        cloasMini()
        if(max){
            closeMax()
        }else{
            max=true
            $('.win10-container').css({height:'100%',width:'100%'})
            var newrw=$('.win10-container').width()-$('.container-left').width()-5
            $('.container-right').css({width:newrw+'px'})
            initWin10Height();
        }  
    })
    $('.right-top img').eq(2).on('click',function(){ 
        cloasMini()
        closeMax()
        $('.win10-container').hide(500)
    })

    var dblclick = 0;
    $('.mypc').on('click', function () {
        dblclick++;
        setTimeout(function () {
            dblclick = 0;
        }, 500);
        if (dblclick > 1) {
            $('.win10-container').show(500)
            dblclick = 0;
        }
    })
    function cloasMini(){
        if(mini){
            mini=false
            $('.win10-container').css({height:'90%',width:oldW+'px',top:'50%',left:'50%',bottom:'initial'})
            $('#footer').show()
            $('#body').show()
            $('.nav-menu').show()
            $('.breadcrumbs').show()
        }
    }
    function closeMax(){
        if(max){
            max=false
            $('.win10-container').css({height:'90%',width:oldW+'px'})
            $('.container-right').css({width:oldrw+'px'})
            initWin10Height();
        }
    }
    console.log(" %c \u5c71\u9876\u6d1e\u6d1e\u4eba %c \u0054\u0068\u0065\u006d\u0065\u0020\u0062\u0079\u0020\u5c71\u9876\u6d1e\u6d1e\u4eba\u002e\u0020\u007c\u0020\u0068\u0074\u0074\u0070\u003a\u002f\u002f\u0072\u006f\u006f\u0074\u0076\u0069\u0070\u002e\u0063\u006e", "color: #FFFFFF; background: #FF4081; padding:6px;", "color: #FFFFFF; background: #424242; padding:6px;");
});
$(window).resize(function (){
    initWin10Height();
});
function initLeftMenuIcon(){
    $('.category-level-0').prepend('<img class="left-icon" src="'+iconcategory1+'" />')
    $('.category-child').prepend('<img class="left-icon" src="'+iconcategory2+'" />')
}
function initArchiveType(){
    var typeHtml=$('.archive-title .table-head-type a').eq(1).html();
    $('.archive-title .table-head-type').html(typeHtml)
}
function initWin10Height(){
    var mainH=$('#win10').height();
    var hearderH=$('#header').height();
    var footerH=$('#footer').height();
    $('#body').css('height',(mainH-hearderH-footerH)+'px');
    $('.container-left').css('height',(mainH-hearderH-footerH-40)+'px');
    $('.container-right').css('height',(mainH-hearderH-footerH)+'px');
}
function initMove(){
    var dv = document.getElementById('win10top');
    var win10 = document.getElementById('win10');
    var x = 0;
    var y = 0;
    var l = 0;
    var t = 0;
    var isDown = false;
    //鼠标按下事件
    dv.onmousedown = function(e) {
        //获取x坐标和y坐标
        x = e.clientX;
        y = e.clientY;
    
        //获取左部和顶部的偏移量
        l = win10.offsetLeft;
        t = win10.offsetTop;
        //开关打开
        isDown = true;
        //设置样式  
        dv.style.cursor = 'move';
    }
    //鼠标移动
    window.onmousemove = function(e) {
        if (isDown == false) {
            return;
        }
        //获取x和y
        var nx = e.clientX;
        var ny = e.clientY;
        //计算移动后的左偏移量和顶部的偏移量
        var nl = nx - (x - l);
        var nt = ny - (y - t);
    
        win10.style.left = nl + 'px';
        win10.style.top = nt + 'px';
    }
    //鼠标抬起事件
    dv.onmouseup = function() {
        //开关关闭
        isDown = false;
        dv.style.cursor = 'default';
    }
}