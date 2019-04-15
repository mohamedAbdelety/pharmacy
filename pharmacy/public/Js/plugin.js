$(document).ready(function() {
	$("body").niceScroll({
		cursorcolor:'#6ccfef',
		cursorwidth:'10px',
		cursorborder:'1px solid #6ccfef'
	});
 	$('.skitter-large').skitter({
        auto_play:true,
	  	controls:false,
	  	controls_position:"rightBottom",
	  	theme:"clean",
	  	dots:false,
	  	focus:false,
	  	focus_position:'leftBottom',
	  	numbers:false,
	  	progressbar:true
  	});

 	$('select').material_select();
 	$('.caret').hide();
    $('.datepicker').pickadate({
	    selectMonths: true, // Creates a dropdown to control month
	    selectYears: 25, // Creates a dropdown of 15 years to control year,
	    today: 'Today',
	    clear: 'Clear',
	    close: 'Ok',
	    format: 'yyyy-mm-dd',
	    closeOnSelect: false // Close upon selecting a date,
  	});

    var mixer = mixitup('.projects');
    $('.controll-mix button').click(function(){
    	$(this).addClass('custom-controll').siblings().removeClass('custom-controll');
    });


    $('.profile-icon i').click(function(){
    	$(this).addClass('profile-icon-active').siblings().removeClass('profile-icon-active');
    });


		


});
