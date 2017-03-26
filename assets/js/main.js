


// target elements with the "draggable" class
interact('.draggable')
  .draggable({
    // enable inertial throwing
    inertia: false,
    // keep the element within the area of it's parent
    
    // enable autoScroll
    autoScroll: true,

    // call this function on every dragmove event
    onmove: dragMoveListener,
    // call this function on every dragend event
   
  });

  function dragMoveListener (event) {
    var target = event.target,
        // keep the dragged position in the data-x/data-y attributes
        x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx,
        y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

    // translate the element
    target.style.webkitTransform =
    target.style.transform =
      'translate(' + x + 'px, ' + y + 'px)';

    // update the posiion attributes
    target.setAttribute('data-x', x);
    target.setAttribute('data-y', y);
  }

  // this is used later in the resizing and gesture demos
  window.dragMoveListener = dragMoveListener;



/* The dragging code for '.draggable' from the demo above
 * applies to this demo as well so it doesn't have to be repeated. */

// enable draggables to be dropped into this
interact('.dropzone').dropzone({
  // only accept elements matching this CSS selector
  accept: '#yes-drop',
  // Require a 75% element overlap for a drop to be possible
  overlap: 0.75,

  // listen for drop related events:

  ondropactivate: function (event) {
    // add active dropzone feedback
    //event.target.classList.add('drop-active');
  },
  ondragenter: function (event) {
    var draggableElement = event.relatedTarget,
        dropzoneElement = event.target;

    // feedback the possibility of a drop
    //dropzoneElement.classList.add('drop-target');
    //draggableElement.classList.add('can-drop');
    //draggableElement.textContent = 'Dragged in';
  },
  ondragleave: function (event) {
    // remove the drop feedback style
    //event.target.classList.remove('drop-target');
    //event.relatedTarget.classList.remove('can-drop');
    //event.relatedTarget.textContent = 'Dragged out';
  },
  ondrop: function (event) {
    //event.relatedTarget.textContent = 'Dropped';
  },
  ondropdeactivate: function (event) {
    // remove active dropzone feedback
    //event.target.classList.remove('drop-active');
    //event.target.classList.remove('drop-target');
  }
});

/* ==========================================================================
   Dropdown Menus
   ========================================================================== */


  $(".dropdown").hover(
    function () {
      $(this).addClass('open');
    }, 
    function () {
      $(this).removeClass('open');
    }
  );

/* ==========================================================================
   countdown timer
   ========================================================================== */
 jQuery('#clock').countdown('2017/03/27',function(event){
  var $this=jQuery(this).html(event.strftime(''
  +'<div class="time-entry days"><span>%-D</span> Days</div> '
  +'<div class="time-entry hours"><span>%H</span> Hours</div> '
  +'<div class="time-entry minutes"><span>%M</span> Minutes</div> '
  +'<div class="time-entry seconds"><span>%S</span> Seconds</div> '));
});

/* ==========================================================================
   WOW Scroll Spy
   ========================================================================== */
   var wow = new WOW({
    //disabled for mobile
	    mobile: false
	});
	wow.init();

/* ==========================================================================
   Nivo Lightbox
   ========================================================================== */
/*   $('.lightbox').nivoLightbox({
    effect: 'fadeScale',
    keyboardNav: true,
    errorMessage: 'The requested content cannot be loaded. Please try again later.'
  });*/

/* ==========================================================================
   Contact From
   ========================================================================== */	
	
	$('.input').blur(function(){
	    if( $(this).val() ) {
	        $(this).parent('.label-line').addClass('active checked');
	    } else {
		    $(this).parent('.label-line').removeClass('active checked');
	    }
	});

	$('.label-line').click(function(){
		$(this).addClass('active');
		if ($('.label-line').hasClass('checked')){}
		else{
			$('.label-line').removeClass('checked');
		}
	});	

/* ==========================================================================
   Back Top Link
   ========================================================================== */
  var offset = 200;
  var duration = 500;
  $(window).scroll(function() {
    if ($(this).scrollTop() > offset) {
      $('.back-to-top').fadeIn(400);
    } else {
      $('.back-to-top').fadeOut(400);
    }
  });
  $('.back-to-top').click(function(event) {
    event.preventDefault();
    $('html, body').animate({
      scrollTop: 0
    }, 600);
    return false;
  })

   // Projects Carousel
  $("#post-carousel").owlCarousel({
    navigation : false,
    pagination: true,
    slideSpeed : 400,
    stopOnHover: true,
    autoPlay: 3000,
    items :1,
  });
/* ==========================================================================
   Slick Nav 
   ========================================================================== */
/*    $('.wpb-mobile-menu').slicknav({
      prependTo: '.navbar-header',
      parentTag: 'span',
      allowParentLinks: true,
      duplicate: false,
      label: '',
      closedSymbol: '<i class="fa fa-angle-right"></i>',
      openedSymbol: '<i class="fa fa-angle-down"></i>',
    });*/


