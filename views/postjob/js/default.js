// jobs.js
// manage job conversion process

var Job;

function removeClassError(){
  $("#new_job .errorForsteps").html("");
  $("#new_job .errorForsteps").hide();
  $("input").removeClass("error");
}

Job = {
    setup : function () {


       $("#new_job").validate( {
          errorLabelContainer: $("#new_job .errorForsteps"),
                                 rules: {
                                     
                                    "login": {
                                        minlength: 3
                                      },
                                    "password": {
                                        
                                        minlength: 3
                                      }

                                 },
                                 messages: {
                                  "login": {
                                        required: "Please enter a Login",
                                        email: "Please enter a valid email address for the login",
                                        minlength: "Your login must consist of at least 3 characters"
                                      },

                                 "password": {
                                        required: "Please enter a Password",
                                        minlength: "Your password must consist of at least 3 characters"
                                      }
                                      

		}
         });
        $("#job_featured_status_2").attr('checked',true);

        $("#step-1 label[for='job_featured_status_2']").click(function (event) {
            event.preventDefault();
            var label1 = $("#step-1 label[for='job_featured_status_1']");
            var label3 = $("#step-1 label[for='job_featured_status_3']");

            label1.removeClass('label-radio-check');
            label3.removeClass('label-radio-check');
            $(this).addClass('label-radio-check');

            $("#job_featured_status_1").attr('checked',false);
            $("#job_featured_status_3").attr('checked',false);
            $("#job_featured_status_2").attr('checked',true);
        });
        //standard checkbox
        $("#step-1 label[for='job_featured_status_1']").click(function (event) {
            event.preventDefault();
            var label2 = $("#step-1 label[for='job_featured_status_2']");
            var label3 = $("#step-1 label[for='job_featured_status_3']");

            label2.removeClass('label-radio-check');
            label3.removeClass('label-radio-check');
            $(this).addClass('label-radio-check');

            $("#job_featured_status_2").attr('checked',false);
            $("#job_featured_status_3").attr('checked',false);
            $("#job_featured_status_1").attr('checked',true);
           
        });
        //expert checkbox
        $("#step-1 label[for='job_featured_status_3']").click(function (event) {
            event.preventDefault();
            var label1 = $("#step-1 label[for='job_featured_status_1']");
            var label2 = $("#step-1 label[for='job_featured_status_2']");

            label1.removeClass('label-radio-check');
            label2.removeClass('label-radio-check');
            $(this).addClass('label-radio-check');

            $("#job_featured_status_1").attr('checked',false);
            $("#job_featured_status_2").attr('checked',false);
            $("#job_featured_status_3").attr('checked',true);
        });

    },
    //==============================commit===========================
  //  toggleTiers : function (radio_label, other_radio) {
 //       if (radio_label.hasClass('label-radio-check')) {
 //           radio_label.removeClass('label-radio-check');
 //           other_radio.addClass('label-radio-check');
 //       } else {
 //           radio_label.addClass('label-radio-check');
//            other_radio.removeClass('label-radio-check');


 //       }


 //   }
};

function setInformation(lat, lng) {
                                    document.getElementById('lat').value=lat;
                                    document.getElementById('lng').value=lng;
                                          };

function getCaretPos(element) {
    element.focus();
    if (document.selection) {
        var sel = document.selection.createRange();
        var clone = sel.duplicate();
        sel.collapse(true);
        clone.moveToElementText(element);
        clone.setEndPoint('EndToEnd', sel);
        return clone.text.length;
    } else {
        return window.getSelection().getRangeAt(0).startOffset;
    }
    return 0;
}

$(function() {
  var over = false;
  $('.fox_body3, .dropdown-menu').mouseenter(function() {
      over = true;
  })
  .mouseleave(function() {
      over = false;
  });

   $(document).click(function(e) {
    if (!over) {
            $('#col').toggleClass("open",false);
           // $(this).unbind(e);
        }
      });
    });
    
  $(function() {
  var over = false;
  $('.fox_body4, .dropdown-menu').mouseenter(function() {
      over = true;
  })
  .mouseleave(function() {
      over = false;
  });

   $(document).click(function(e) {
    if (!over) {
            $('#col2').toggleClass("open",false);
           // $(this).unbind(e);
        }
      });
    });


$(document).ready(function() {
    Job.setup(); 
    $(".fancybox").fancybox({});
    
    
  function getEndPos(element, $len) {
  var range = document.createRange();
             range.setStart(element.childNodes[0]/* Это же textNode? */, $(element).text().length-$len);
             range.collapse(true);// совмещаем конец и начало в стартовой позиции
             var sel= window.getSelection();
             sel.removeAllRanges();
             sel.addRange(range);
             }
  
   $('.color-btn').click(function() {
      var value=$(this).attr("data-color");
        $('.fox_body3').css('background', value);   
          $('#col').toggleClass("open",false);
           });
   
    $('.color-btn1').click(function() {
      var value=$(this).attr("data-color");
        $('.fox_body4').css('background', value);   
          $('#col2').toggleClass("open",false);
           });


//   $('body').find('*').not('.fox_body3').bind("click",function() {
//        $('ul').toggleClass("open",false);
//    });

 //    $('body :not(.fox_body3)').bind("click",function() {
 //    $('ul').toggleClass("open",false);
 //  });

     $('.fox_body3').bind("click",function() {
    if ($('#col').hasClass("open"))
    {
      $('#col').toggleClass("open",false);
    }
    else
    {
      $('#col').toggleClass("open",true);
    }
   });  
   
    $('.fox_body4').bind("click",function() {
    if ($('#col2').hasClass("open"))
    {
      $('#col2').toggleClass("open",false);
    }
    else
    {
      $('#col2').toggleClass("open",true);
    }
   });  
    
       
    $('.css_input3').bind("paste", function(e) {
     return false;
     });
     

  $('.css_input3').keypress(function(e) {

   var pos=getCaretPos(this);

     if (e.keyCode < 46 || e.keyCode > 57)
           {return false;}

     if (e.keyCode == 48) {  //  0
     var value = $(this).text();
     if (/^0{1}(?!\.)/.test(value)) {return false;}
      }

     if (e.keyCode == 47){    //  ,
     return false;}

     if (e.keyCode == 46){     //  .
     var value = $(this).text();
     if (/\./.test(value) || value == '') {return false;}
     }
     var value = $(this).text();

if (/\.(?=\d{2})/.test(value)) {
                      if (pos>value.indexOf("."))
                               {
                                $(this).text(value.replace(/\d$/,''));
                                getEndPos(this,0);
                               }
                               else
                               {
                               var re = /\./
                               var tagList = value.split(re);
                               if (/^\d{3}/.test(tagList[0]))
                                 {
                                   tagList[0]=tagList[0].replace(/\d$/,'');
                                   var str = tagList.join('.');
                                   $(this).text(str);
                                  }
                                getEndPos(this,3);
                               }
                              }
       else if (/\.(?=\d{1})/.test(value))
       {
        if (pos>value.indexOf("."))
                               {
                                getEndPos(this,0);
                               }
                               else
                               {
                               var re = /\./
                               var tagList = value.split(re);
                               if (/^\d{3}/.test(tagList[0]))
                                 {
                                   tagList[0]=tagList[0].replace(/\d$/,'');
                                   var str = tagList.join('.');
                                   $(this).text(str);
                                  }
                                getEndPos(this,2);
                               }
          }
          else
          {
          //alert(value);
          //    if (/^\d{4}/.test(value)) {$(this).text(value.replace(/\d$/,''));}
          if (/^\d{3}(?=\.)/.test(value)) {$(this).text(value.replace(/\d$/,''));}
          getEndPos(this,0);
           }
        });

  $('.css_input3').bind('input keyup change', function() {
     var value = $(this).text();
     var pos = getCaretPos(this);
        // alert(pos);
         if (/^\d{4}/.test(value))
         {
           if(value.length-pos <= 1)
           {
             //alert(value.length-pos);
              $(this).text(value.slice(0,-1));
               getEndPos(this,0);
           }
            else
            {
              $(this).text(value.slice(0,-2));
              getEndPos(this,0);
            }
         }
    if (/^0{1}\d/.test(value)) {$(this).text(value.replace(/^\d/,''));}

     document.getElementById($(this).attr("dimension")).value=$(this).text();
     });
  });

