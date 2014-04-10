<!doctype html>
<html>
<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="lib/center/jquery.center.js"></script>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<script>
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
	</script>
	<style>
		#primary {
			width: 100%;
			height: 100%;
		}
		.slide {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
		}
		.slide img {
			position: absolute;
			display: none;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
		}
		.fa {
			color: #fff;
		}
		.fa:hover {
			color: #444;
		}
		nav {
			position: absolute;
			top: 90%;
			left: 40%;
			z-index: 2;
		}
		#nav-inner {
			display: inline-block;
		}
		nav a {
			display: inline-block;
			margin: 0 10px;
		}
	</style>
</head>

<body>

<div id="primary">
	<div class="slide" id="1">
	<img src="http://localhost/sandbox/demo/static/1.png" />
</div>
<div class="slide" id="2">
	<img src="http://localhost/sandbox/demo/static/2.png" />
</div>
<div class="slide" id="3">
	<img src="http://localhost/sandbox/demo/static/3.png" />
</div>
<div class="slide" id="4">
	<img src="http://localhost/sandbox/demo/static/4.png" />
</div>
<div class="slide" id="5">
	<img src="http://localhost/sandbox/demo/static/5.png" />
</div>
<nav>
	<a href="#" id="last" data-target="last"><i class="fa fa-arrow-circle-left"></i></a>
	<div id="nav-inner"></div>
	<a href="#" id="next" data-target="next"><i class="fa fa-arrow-circle-right"></i></a>
</nav>
</div>

</body>
</html>