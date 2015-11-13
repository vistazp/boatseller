$(function () {
            $.get('/boatseller/details/getPicList', function(o) {
		alert(1);
		//for (var i = 0; i < o.length; i++)
		//{
		//	$('#listInsert').append('<div>' + o[i].text + '<a class="del" rel="'+o[i].id+'" href="#">X</a></div>');
                        
		//}
            }, 'json');
       
});


$.fn.Pipi = function (str){
    alert(str);
};

$.fn.Kamar = function(){
    return $(this).css('background', 'red');
};

$(document).ready(function(){
    
    $("#kuku").click(function(){
       
       
       $.get('details/getPicList', function(o) {
		alert(1);
		//for (var i = 0; i < o.length; i++)
		//{
		//	$('#listInsert').append('<div>' + o[i].text + '<a class="del" rel="'+o[i].id+'" href="#">X</a></div>');
                        
		//}
            }, 'json');
       
       
    });
    
});