$(document).ready(function() {
	// declare all variables at top makes v8 happy, use nav and slide_image_selector to cache jquery selectors
	var num_slides, slide_image_selector, nav, target, primary, current_num;

	slide_image_selector = $('.slide img');
	current_num = 1;
	nav = $('#nav-inner');
	num_slides = slide_image_selector.length;
	primary = $('#primary');

	for( i=1; i<=num_slides; i++ ) {
		nav.append('<a href="#" data-target="' + i + '"><i class="fa fa-circle"></i></a>');
	}

	slide_image_selector.first().show();

	nav.on('click','a',function() {
		target = $(this).attr('data-target');
		$('#' + current_num + ' img').hide();
		current_num = target;
		$('#' + target + ' img').show();
	})

	$('#next').on('click',function() {
		$('#' + current_num + ' img').hide();
		if( current_num == num_slides ) {
			current_num = 1;
		} else {
			current_num++;
		}
		target = current_num;
		$('#' + target + ' img').show();
	})

	$('#last').on('click',function() {
		$('#' + current_num + ' img').hide();
		if( current_num == 1 ) {
			current_num = num_slides;
		} else {
			current_num--;
		}
		target = current_num;
		$('#' + target + ' img').show();
	})
})