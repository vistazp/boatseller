//$(function () {
//            $.get('/boatseller/details/getPicList', function(data) {
//		alert(data);
		//for (var i = 0; i < o.length; i++)
		//{
		//	$('#listInsert').append('<div>' + o[i].text + '<a class="del" rel="'+o[i].id+'" href="#">X</a></div>');
                        
		//}
//            }, 'json');
//       
//});


$.fn.Pipi = function (str){
    alert(str);
};

$.fn.Kamar = function(){
    return $(this).css('background', 'red');
};

$(document).ready(function(){
    
    $("#kuku").click(function(){
       
       
       $.get('/boatseller/details/getPicList', function(data) {
                v = JSON.parse(data);
		
		for (var i = 0; i < v.length; i++)
		{
                  // <img src="pic_mountain.jpg" alt="Mountain View" style="width:304px;height:228px;">
		$('#picinsert').append('<img src=' + v[i].path + ' style="width:304px; height:228px;"> <a class="del" rel="'+v[i].id+'" href="#">X</a>');
              //   alert(v[i].path);
		}
                
            });
          
    });
    
});