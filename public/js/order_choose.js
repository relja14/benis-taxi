$(document).ready(function(){
    $('.btn-primary').click(function (){
    	$('.thumbnail.active').removeClass('active');
    	$(this).parents('.thumbnail').addClass('active');
    	$('.row-next').show();
    });

});

