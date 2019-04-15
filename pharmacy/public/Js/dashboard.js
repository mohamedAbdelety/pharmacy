$(document).ready(function() {


    $('aside >ul >li').click(function () {
       $(this).children().not('i').slideToggle(500).css("background-color", "#2c3b41");
    });


    $(window).scroll(function () {

    	console.log($(window).scrollTop());
    	if ($(window).scrollTop() >= 1350 && $(window).scrollTop() <= 1450)
    		{
          $('.about-skills div:nth-of-type(1) > span').css('width','60%');
          $('.about-skills div:nth-of-type(2) > span').css('width','70%');
          $('.about-skills div:nth-of-type(3) > span').css('width','85%');
          $('.about-skills div:nth-of-type(4) > span').css('width','65%');
          $('.about-skills div:nth-of-type(5) > span').css('width','90%');
    		}
        if ($(window).scrollTop() >= 1970)
          {
            var counter = setInterval(function(){
              if(Math.abs( $('.state-box > div:nth-of-type(1) p:nth-of-type(2)').text()) <  Math.abs( $('.state-box > div:nth-of-type(1) p:nth-of-type(2)').attr('data-mohamed'))){
                  $('.state-box > div:nth-of-type(1) p:nth-of-type(2)').text(Math.abs($('.state-box > div:nth-of-type(1) p:nth-of-type(2)').text())+1);
              }
              if(Math.abs( $('.state-box > div:nth-of-type(2) p:nth-of-type(2)').text()) <  Math.abs( $('.state-box > div:nth-of-type(2) p:nth-of-type(2)').attr('data-mohamed'))){
                $('.state-box > div:nth-of-type(2) p:nth-of-type(2)').text(Math.abs($('.state-box > div:nth-of-type(2) p:nth-of-type(2)').text())+1);
              }
              if(Math.abs( $('.state-box > div:nth-of-type(3) p:nth-of-type(2)').text()) <  Math.abs( $('.state-box > div:nth-of-type(3) p:nth-of-type(2)').attr('data-mohamed'))){
                $('.state-box > div:nth-of-type(3) p:nth-of-type(2)').text(Math.abs($('.state-box > div:nth-of-type(3) p:nth-of-type(2)').text())+1);
              }
              if(Math.abs( $('.state-box > div:nth-of-type(4) p:nth-of-type(2)').text()) <  Math.abs( $('.state-box > div:nth-of-type(4) p:nth-of-type(2)').attr('data-mohamed'))){
                $('.state-box > div:nth-of-type(4) p:nth-of-type(2)').text(Math.abs($('.state-box > div:nth-of-type(4) p:nth-of-type(2)').text())+1);
              }
            },10);
          }
    });








    $('.hide-panel').click(function(){
      $(this).parent().parent().next(".panel-body").slideToggle(200);
    });

    $('.close-panel').click(function(){
      $(this).parent().parent().parent().slideToggle(200);
    });





    $('#foolow-next').click(function(){
        var error = 0;
        if($('#company').val() == ''){
            $('#company').css('border-bottom','1px solid #f00');
            if( $('#company').siblings('p').length == 0){
                $('#company').parent().append("<p style='color:#f00;position:relative;top:-10px'>برجاء كتابة اسم الشركة </p>");
            }else{
                $('#company').siblings().remove('p');
                $('#company').parent().append("<p style='color:#f00;position:relative;top:-10px'>برجاء كتابة اسم الشركة </p>");
            }
            error = 1;
        }
        else if($('#company').val().length < 4){
            $('#company').css('border-bottom','1px solid #f00');
            if( $('#company').siblings('p').length == 0){
              $('#company').parent().append("<p style='color:#f00;position:relative;top:-10px'>برجاء كتابة اسم الشركة صحيحا </p>");
            }else{
              $('#company').siblings().remove('p');
              $('#company').parent().append("<p style='color:#f00;position:relative;top:-10px'>برجاء كتابة اسم الشركة صحيحا </p>");
            }
            error = 1;
        }else{
            $('#company').css('border-bottom','1px solid #c9c9c9');
            $('#company').siblings().remove('p');
        }

        if($('#address').val() == ''){
          $('#address').css('border-bottom','1px solid #f00');
          if( $('#address').siblings('p').length == 0){
            $('#address').parent().append("<p style='color:#f00;position:relative;top:-10px'>برجاء كتابة عنوان الشركة   </p>");
          }else{
              $('#address').siblings().remove('p');
              $('#address').parent().append("<p style='color:#f00;position:relative;top:-10px'>برجاء كتابة عنوان الشركة   </p>");
          }
            error = 1;
        }
        else if($('#address').val().length < 8){
          $('#address').css('border-bottom','1px solid #f00');
          if( $('#address').siblings('p').length == 0){
            $('#address').parent().append("<p style='color:#f00;position:relative;top:-10px'>برجاء كتابة عنوان الشركة بالتفصيل </p>");
          }else{
            $('#address').siblings().remove('p');
            $('#address').parent().append("<p style='color:#f00;position:relative;top:-10px'>برجاء كتابة عنوان الشركة بالتفصيل </p>");
          }
            error = 1;
        }else{
            $('#address').css('border-bottom','1px solid #c9c9c9');
            $('#address').siblings().remove('p');
        }





        if($('#description').val() == ''){
          $('#description').css('border-bottom','1px solid #f00');
          if( $('#description').siblings('p').length == 0){
            $('#description').parent().append("<p style='color:#f00;position:relative;top:-10px'>برجاء كتابة الوصف الخاص بمجال الشركة </p>");
          }else{
            $('#description').siblings().remove('p');
            $('#description').parent().append("<p style='color:#f00;position:relative;top:-10px'>برجاء كتابة الوصف الخاص بمجال الشركة </p>");
          }
            error = 1;
        }
        else if($('#description').val().length < 8){
          $('#description').css('border-bottom','1px solid #f00');
          if( $('#description').siblings('p').length == 0){
            $('#description').parent().append("<p style='color:#f00;position:relative;top:-10px'>برجاء توضيح اكبر لمجال عمل الشركة </p>");
          }else{
            $('#description').siblings().remove('p');
            $('#description').parent().append("<p style='color:#f00;position:relative;top:-10px'>برجاء توضيح اكبر لمجال عمل الشركة </p>");
          }
            error = 1;
        }else{
            $('#description').css('border-bottom','1px solid #c9c9c9');
            $('#description').siblings().remove('p');
        }




        if($('#user').val() == ''){
            $('#user').css('border-bottom','1px solid #f00');
            if( $('#user').siblings('p').length == 0){
              $('#user').parent().append("<p style='color:#f00;position:relative;top:-10px'>برجاء كتابة اسم الدخول </p>");
            }else{
              $('#user').siblings().remove('p');
              $('#user').parent().append("<p style='color:#f00;position:relative;top:-10px'>برجاء كتابة اسم الدخول </p>");
            }
            error = 1;
        }
        else if($('#user').val().length < 4){
            $('#user').css('border-bottom','1px solid #f00');
            if( $('#user').siblings('p').length == 0){
              $('#user').parent().append("<p style='color:#f00;position:relative;top:-10px'>برجاء كتابة اسم دخول اكثر تميزا للحماية  </p>");
            }else{
              $('#user').siblings().remove('p');
              $('#user').parent().append("<p style='color:#f00;position:relative;top:-10px'>برجاء كتابة اسم دخول اكثر تميزا للحماية  </p>");
            }
            error = 1;
        }else{
            $('#user').css('border-bottom','1px solid #c9c9c9');
            $('#user').siblings().remove('p');
        }




        if($('#password').val() == ''){
          $('#password').css('border-bottom','1px solid #f00');
          if( $('#password').siblings('p').length == 0){
            $('#password').parent().append("<p style='color:#f00;position:relative;top:-10px'>برجاء كتابة كلمة المرور  </p>");
          }else{
            $('#password').siblings().remove('p');
            $('#password').parent().append("<p style='color:#f00;position:relative;top:-10px'>برجاء كتابة كلمة المرور  </p>");
          }
            error = 1;
        }
        else if($('#password').val().length < 6){
          $('#password').css('border-bottom','1px solid #f00');
          if( $('#password').siblings('p').length == 0){
            $('#password').parent().append("<p style='color:#f00;position:relative;top:-10px'>اصغر كلمة مرور مسموح به تتكون من 6 حروف</p>");
          }else{
            $('#password').siblings().remove('p');
            $('#password').parent().append("<p style='color:#f00;position:relative;top:-10px'>اصغر كلمة مرور مسموح به تتكون من 6 حروف</p>");
          }
            error = 1;
        }else{
            $('#password').css('border-bottom','1px solid #c9c9c9');
            $('#password').siblings().remove('p');
        }




        if($('#password2').val() == ''){
          $('#password2').css('border-bottom','1px solid #f00');
          if( $('#password2').siblings('p').length == 0){
            $('#password2').parent().append("<p style='color:#f00;position:relative;top:-10px'>برجاء كتابة كلمة مرور المسئول  </p>");
          }else{
            $('#password2').siblings().remove('p');
            $('#password2').parent().append("<p style='color:#f00;position:relative;top:-10px'>برجاء كتابة كلمة مرور المسئول  </p>");
          }
            error = 1;
        }
        else if($('#password2').val().length < 9){
          $('#password2').css('border-bottom','1px solid #f00');
          if( $('#password2').siblings('p').length == 0){
            $('#password2').parent().append("<p style='color:#f00;position:relative;top:-10px'>اصغر كلمة مرور مسئول مسموح به تتكون من 9 حروف </p>");
          }else{
            $('#password2').siblings().remove('p');
            $('#password2').parent().append("<p style='color:#f00;position:relative;top:-10px'>اصغر كلمة مرور مسئول مسموح به تتكون من 9 حروف </p>");
          }
            error = 1;
        }else{
            $('#password2').css('border-bottom','1px solid #c9c9c9');
            $('#password2').siblings().remove('p');
        }

        if($('#phone').val() == ''){
          $('#phone').css('border-bottom','1px solid #f00');
          if( $('#phone').siblings('p').length == 0){
            $('#phone').parent().append("<p style='color:#f00;position:relative;top:-10px'>برجاء كتابة رقم هاتف الشركة  </p>");
          }else{
            $('#phone').siblings().remove('p');
            $('#phone').parent().append("<p style='color:#f00;position:relative;top:-10px'>برجاء كتابة رقم هاتف الشركة  </p>");
          }
            error = 1;
        }
        else if($('#phone').val().length < 8){
          $('#phone').css('border-bottom','1px solid #f00');
          if( $('#phone').siblings('p').length == 0){
            $('#phone').parent().append("<p style='color:#f00;position:relative;top:-10px'>برجاء كتابة رقم الهاتف صحيحا </p>");
          }else{
            $('#phone').siblings().remove('p');
            $('#phone').parent().append("<p style='color:#f00;position:relative;top:-10px'>برجاء كتابة رقم الهاتف صحيحا </p>");
          }
            error = 1;
        }else{
            $('#phone').css('border-bottom','1px solid #c9c9c9');
            $('#phone').siblings().remove('p');
        }


        if($('#phonetwo').val() != '' && $('#phonetwo').val().length < 8){
          $('#phonetwo').css('border-bottom','1px solid #f00');
          if( $('#phonetwo').siblings('p').length == 0){
            $('#phonetwo').parent().append("<p style='color:#f00;position:relative;top:-10px'>برجاء كتابة رقم الهاتف صحيحا </p>");
          }else{
            $('#phonetwo').siblings().remove('p');
            $('#phonetwo').parent().append("<p style='color:#f00;position:relative;top:-10px'>برجاء كتابة رقم الهاتف صحيحا </p>");
          }
            error = 1;
        }else{
            $('#phonetwo').css('border-bottom','1px solid #c9c9c9');
            $('#phonetwo').siblings().remove('p');
        }

        if(error == 0){
            $('.first-form').slideToggle(2000);
            $('.follow-form').slideToggle(2000);
            Materialize.toast('برجاء اكمال البيانات', 4000    );
        }else{

        }

    });


		$('.modal').modal();
		$('#search-user').on("click","#edit",function(){//because it bring from another page : backend.php
       $('#modal1').modal('open'); // must 'on' if '.edit' from same page we can use '.click' direct
			$("#editthismessage").val($(this).data("id"));
			fullform($(this).data("id"));
		});



    $('#typelogin').change(function(){
      if(document.getElementById('typelogin').value == 'admain'){
          $('#modal1').modal('open');
      }
		});



		$('#expencess-contain').on("click","#edit",function(){//because it bring from another page : backend.php
      alert('www');
       $('#modal2').modal('open'); // must 'on' if '.edit' from same page we can use '.click' direct
			$("#editthismessage").val($(this).data("id"));
			fullform($(this).data("id"));
		});






    var clock = setInterval(function(){
      if(Math.abs($('.clock .clock-second').text()) == 59){
        if(Math.abs($('.clock .clock-minuite').text()) == 59){
          $('.clock .clock-second').text(00);
          $('.clock .clock-minuite').text(00);
          if($('.clock .clock-hour').text() == 23){
            $('.clock .clock-second').text(00);
            $('.clock .clock-minuite').text(00);
            $('.clock .clock-hour').text(00);
          }else{
            $('.clock .clock-hour').text(Math.abs($('.clock .clock-hour').text()) + 1 );
            $('.clock .clock-second').text(00);
            $('.clock .clock-minuite').text(00);
          }
        }else{
          $('.clock .clock-minuite').text(Math.abs($('.clock .clock-minuite').text()) + 1 );
          $('.clock .clock-second').text(00);
        }
      }else{
        $('.clock .clock-second').text(Math.abs($('.clock .clock-second').text()) + 1 );
      }

    },1000);




    $("#add-expence").submit(function(a){
      a.preventDefault();
    });




    $('#search-user').on("change","#editstoretypeowner",function(){//because it bring from another page : backend.php
      alert('www');
		});
    $('#editstoretypeowner').change(function(){
      alert("www");
    });











    $('#typeowner').change(function(){
      if($('#typeowner').val() == 'ايجار'){
        $('#price').removeAttr('disabled');
      }else{
        $('#price').attr('disabled','disabled');
        $('#price').val('');// = '';
      }
    });


    $('#bill_X').change(function(){
        $('#bill-bar').removeAttr('disabled');
    });

    $('#bill-bar').keyup(function(){
	 $('#bill_Xx').css('display','none');
    });

	$('#addbillb').click(function(){
	 $('.addbill').show();
  });



    $('#deteemineamount').change(function(){
      $('#amount_x').removeAttr('disabled');
    });

    $('.addproductinstore i').click(function(){
      $('.addproductinstore').slideToggle(700);
    });

    $('.scroll').click(function(){

    });

    $('#send-sell').click(function(){
      $('.addproductinstore').slideToggle(700);
    });


    var x = 0;
    $('#selectall').click(function(){
      if( x == 0){
          $('.add-employee p input').attr('checked','checked');
          $('#selectall').text('ازالة التحديد');
          x = 1;
      }else{
        $('.add-employee p input').removeAttr('checked');
        $('#selectall').text('تحديد الكل');
        x = 0;
      }

    });



    $('.datepicker').pickadate({
	    selectMonths: true, // Creates a dropdown to control month
	    selectYears: 25, // Creates a dropdown of 15 years to control year,
	    today: 'Today',
	    clear: 'Clear',
	    close: 'Ok',
	    format: 'yyyy-mm-dd',
	    closeOnSelect: false // Close upon selecting a date,
  	});



});
