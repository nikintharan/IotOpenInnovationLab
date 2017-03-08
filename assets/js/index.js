$(".logout").on("click",function(){

  IN.User.logout(function(){
    location.reload();
  });

})


/* ==========================================================================
   WOW Scroll Spy
   ========================================================================== */
   var wow = new WOW({
    //disabled for mobile
	    mobile: false
	});
	wow.init();



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

    // Setup an event listener to make an API call once auth is complete
    function onLinkedInLoad() {
        IN.Event.on(IN, "auth", getProfileData);
    }

    // Handle the successful return from the API call
    function onSuccess(data) {
        console.log(data);
        document.location.href="/iot/workspace.php";
    }

    // Handle an error response from the API call
    function onError(error) {
        console.log(error);
    }

    // Use the API call wrapper to request the member's basic profile data
    function getProfileData() {
        IN.API.Raw("/people/~").result(onSuccess).error(onError);
    }

function onLinkedInLoad() {
    IN.Event.on(IN, "auth", getProfileData);
    $('a[id*=li_ui_li_gen_]').css({marginBottom:'20px'})
   .html('<div class="linkedIn">Sign</div><img src="assets/img/LinkedIn-2.png" border="0" />');
}

