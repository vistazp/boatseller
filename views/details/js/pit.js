

$(function () {
       $.get('/boatseller/details/getPicList', function(data) {
                v = JSON.parse(data);
		
		for (var i = 0; i < v.length; i++)
		{
                  // <img src="pic_mountain.jpg" alt="Mountain View" style="width:304px;height:228px;">
		$('#picinsert').append('<div><img src=' + v[i].path + ' style="width:250px;"> <a class="del" rel="'+v[i].id+'" href="#">X</a></div>');
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

$(document).ready(function(){
       $('.fileinput').change(function () {

           // return false;
           var send_url = $(this).attr('data-url');
           var fd = new FormData();
 
           for (var i = 0; i <= this.files.length; i++)
            {
             fd.append("userfile[]", this.files[i]);
            }      
  
            $.ajax({
            url: send_url,
            type: 'POST',
            enctype: 'multipart/form-data',
            data: fd,
            processData: false,
            contentType: false,
            success: function(){
                $.get('/boatseller/details/getPicList', function(data) {
                v = JSON.parse(data);
		
		for (var i = 0; i < v.length; i++)
		{
                  // <img src="pic_mountain.jpg" alt="Mountain View" style="width:304px;height:228px;">
		$('#picinsert').append('<div><img src=' + v[i].path + ' style="width:250px;"> <a class="del" rel="'+v[i].id+'" href="#">X</a></div>');
              //   alert(v[i].path);
		}
                  return false;
		});
              }
             });
           });         
       
        });