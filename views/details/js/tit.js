$(function () {
    $('.fileinput').change(function () {

        var url = $(this).attr('data-url');
        a = this.files[0];
        var data = $(this);
        //alert(a);
        //console.log('aaaaasss');
        //console.log(data);

        //$.post(url, data, function(o) {

        //        $('#listInsert').append('<div>' + o.text + '<a class="del" rel="'+ o.id +'" href="#">X</a></div>');		
        //}, 'json');


        return false;

//    var send_url = $(this).attr('data-url');
//    var fd = new FormData();

//    console.log(this.files);

//    fd.append("userpic", this.files[0]);

//    $.ajax({
//        url: send_url,
//        type: "POST",
//        data: fd,
//        processData: false,
//        contentType: false
//    });
    });

    $('.fileinput').change(function () {

        var url = $(this).attr('data-url');
      //  a = this.files[0];
        var data = $(this);
        //alert(a);
        //console.log('aaaaasss');
        //console.log(data);

        //$.post(url, data, function(o) {

        //        $('#listInsert').append('<div>' + o.text + '<a class="del" rel="'+ o.id +'" href="#">X</a></div>');		
        //}, 'json');


        return false;

//    var send_url = $(this).attr('data-url');
//    var fd = new FormData();

//    console.log(this.files);

//    fd.append("userpic", this.files[0]);

//    $.ajax({
//        url: send_url,
//        type: "POST",
//        data: fd,
//        processData: false,
//        contentType: false
//    });
    });









    $.get('dashboarded/xhrGetListing', function (o) {

        for (var i = 0; i < o.length; i++)
        {
            $('#listInsert').append('<div>' + o[i].text + '<a class="del" rel="' + o[i].id + '" href="#">X</a></div>');
        }

        $(document).on("click", ".del", function () {
            delItem = $(this);
            var id = $(this).attr('rel');

            $.post('dashboarddd/xhrDeleteListing', {'id': id}, function (o) {
                delItem.parent().remove();

            }, 'json');

            return false;
        });

    }, 'json');





    $('#randomInsert').submit(function () {
        var url = $(this).attr('action');
        var data = $(this).serialize();

        $.post(url, data, function (o) {

            $('#listInsert').append('<div>' + o.text + '<a class="del" rel="' + o.id + '" href="#">X</a></div>');
        }, 'json');


        return false;
    });

});
