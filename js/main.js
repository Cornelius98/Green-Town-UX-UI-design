(function($) {

	var	$window = $(window),
		$body = $('body');

	// Breakpoints.
		breakpoints({
			xlarge:  [ '1281px',  '1680px' ],
			large:   [ '981px',   '1280px' ],
			medium:  [ '737px',   '980px'  ],
			small:   [ null,      '736px'  ]
		});

	// Play initial animations on page load.
		$window.on('load', function() {
			window.setTimeout(function() {
				$body.removeClass('is-preload');
			}, 100);
		});

	// Dropdowns.
		$('#nav > ul').dropotron({
			offsetY: -22,
			mode: 'fade',
			noOpenerFade: true,
			speed: 300,
			detach: false
		});

	// Nav.

		// Title Bar.
			$(
				'<div id="titleBar">' +
					'<a href="#navPanel" class="toggle"></a>' +
					'<span class="title">' + $('#logo').html() + '</span>' +
				'</div>'
			)
				.appendTo($body);

		// Panel.
			$(
				'<div id="navPanel">' +
					'<nav>' +
						$('#nav').navList() +
					'</nav>' +
				'</div>'
			)
				.appendTo($body)
				.panel({
					delay: 500,
					hideOnClick: true,
					hideOnSwipe: true,
					resetScroll: true,
					resetForms: true,
					side: 'left',
					target: $body,
					visibleClass: 'navPanel-visible'
				});

})(jQuery);






function tablefilter(columnIndex) {
 var selectBox = document.getElementsByTagName("select")
  [columnIndex];
 var selectedValue = 
 selectBox.value.toLowerCase();
 var table=
  document.getElementById("emp-table");
 var rows=
  table.getElementsByTagName("tr");

 for(var i = 0; i<rows.length; i++) {
   var cells=
	rows[i].getElementsByTagName("td");
   var shouldDisplay = false;

   var cellValue = 
   cells[columnIndex].innerText.toLowerCase();
	   if(cellValue===seletedValue,
		selectedValue==="all") {
		 shouldDisplay = true;
	   }

	   rows[i].style.display=shouldDisplay?  "none"
 }


}