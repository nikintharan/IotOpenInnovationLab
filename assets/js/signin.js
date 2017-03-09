    // Setup an event listener to make an API call once auth is complete
    function onLinkedInLoad() {
        IN.Event.on(IN, "auth", getProfileData);
    }

    // Handle the successful return from the API call
    function onSuccess(data) {
        console.log(data);
        
        if(window.location.href=='http://localhost/iot/index.php')
        	document.location.href="/iot/dashboard.php";
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

$(".cd-signout").on("click",function(){

  IN.User.logout(function(){
    document.location.href="/iot/index.php";
  });

})
