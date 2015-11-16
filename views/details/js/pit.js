$(function () {
      
       $.get('/boatseller/details/getPicList', function(data) {
                v = JSON.parse(data);
		
		for (var i = 0; i < v.length; i++)
		{
                  // <img src="pic_mountain.jpg" alt="Mountain View" style="width:304px;height:228px;">
		$('#picinsert').append('<div><img src=' + v[i].path + ' style="width:304px; height:228px;"> <a class="del" rel="'+v[i].id+'" href="#">X</a></div>');
              //   alert(v[i].path);
		}
                     $(document).on("click", ".del", function() {
                        delItem = $(this);
			var id = $(this).attr('rel');
			
			$.post('/boatseller/details/delPicList', {'id': id}, function(o) {
				delItem.parent().remove();
                                
			}, 'json');
			return false;
		});
            });       
});


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
                     $(document).on("click", ".del", function() {
			delItem = $(this);
			var id = $(this).attr('rel');
			
			$.post('/boatseller/details/DelPic', {'id': id}, function(o) {
				delItem.parent().remove();
                                
			});
			return false;
		});
            });
          
    });
    
});