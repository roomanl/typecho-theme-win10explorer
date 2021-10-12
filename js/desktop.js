$(function(){
    var tools=[
        {name:'新闻',url:'https://news.qq.com',icon:'https://i.52112.com/icon/jpg/256/20170419/5868/344565.jpg'},
        {name:'JSON格式化',url:'https://www.json.cn',icon:'https://i.52112.com/icon/jpg/256/20190917/58761/2599048.jpg'},
    ]
    for(var i in tools){
        var tool=tools[i]
        var item="<li class='pc-icon desktoptools' data='"+JSON.stringify(tool)+"'>"+
        '<img class="mypc" src="'+tool.icon+'" />'+
        '<div>'+tool.name+'</div>'+
        '</li>';
        $('.desktop-list').append(item)
    }

   
    $('.desktoptools').click(function(){
        var data =JSON.parse($(this).attr('data'))
       // $('.right-top img').eq(0).click()
        layer.open({
            type: 2,
            title: data.name,
            shadeClose: true,
            shade: false,
            maxmin: true, //开启最大化最小化按钮
            area: ['80%', '90%'],
            content: data.url
          });
    })



})