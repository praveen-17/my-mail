$(document).on('click', '.tablinks', function(e){
	var toggVar = $(this).attr('data-toggle');
	$('.tab-content').hide();
	$('.tab-content'+toggVar).show();
	$('.tablinks').removeClass('active');
	$(this).addClass('active');
});