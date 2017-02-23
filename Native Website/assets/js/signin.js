$(document).ready(function($){

	firebase_init();

firebase.auth().onAuthStateChanged(function(user) {

	if (user) {
	var name = user.displayName;
	$(".login-btn").parent('li').hide();
	$(".cd-signup").parent('li').hide();
	$(".cd-logout").show();
	$(".navbar-nav").append("<li class='user_name'><a href='#'>Hi "+name+"</a></li>");	
		} 
	else {

	// nothing right now
	}});

	var formModal = $('.cd-user-modal'),
		formLogin = formModal.find('#cd-login'),
		formSignup = formModal.find('#cd-signup'),
		formForgotPassword = formModal.find('#cd-reset-password'),
		formModalTab = $('.cd-switcher'),
		tabLogin = formModalTab.children('li').eq(0).children('a'),
		tabSignup = formModalTab.children('li').eq(1).children('a'),
		forgotPasswordLink = formLogin.find('.cd-form-bottom-message a'),
		backToLoginLink = formForgotPassword.find('.cd-form-bottom-message a'),
		signInButton = $('.cd-signin'),
		signUpButton = $('.cd-signup')
		
/*
	//open modal
	mainNav.on('click', function(event){
		$(event.target).is(mainNav) && mainNav.children('ul').toggleClass('is-visible');
	});*/

	//open sign-up form
	signUpButton.on('click', signup_selected);
	//open login-form form
	signInButton.on('click', login_selected);

	//close modal
	formModal.on('click', function(event){
		if( $(event.target).is(formModal) || $(event.target).is('.cd-close-form') ) {
			formModal.removeClass('is-visible');
		}	
	});
	//close modal when clicking the esc keyboard button
	$(document).keyup(function(event){
    	if(event.which=='27'){
    		formModal.removeClass('is-visible');
	    }
    });

    $(".cd-logout").on('click', function(event){
		firebase.auth().signOut().then(function() {
		// Sign-out successful.
		location.reload();
		}, function(error) {
		// An error happened.
		});
    });

	//switch from a tab to another
	formModalTab.on('click', function(event) {
		event.preventDefault();
		( $(event.target).is( tabLogin ) ) ? login_selected() : signup_selected();
	});

	/*//hide or show password
	$('.hide-password').on('click', function(){
		var togglePass= $(this),
			passwordField = togglePass.prev('input');
		
		( 'password' == passwordField.attr('type') ) ? passwordField.attr('type', 'text') : passwordField.attr('type', 'password');
		( 'Hide' == togglePass.text() ) ? togglePass.text('Show') : togglePass.text('Hide');
		//focus and move cursor to the end of input field
		passwordField.putCursorAtEnd();
	});*/

	//show forgot-password form 
	forgotPasswordLink.on('click', function(event){
		event.preventDefault();
		forgot_password_selected();
	});

	//back to login from the forgot-password form
	backToLoginLink.on('click', function(event){
		event.preventDefault();
		login_selected();
	});

	function login_selected(){
		formModal.addClass('is-visible');
		formLogin.addClass('is-selected');
		formSignup.removeClass('is-selected');
		formForgotPassword.removeClass('is-selected');
		tabLogin.addClass('selected');
		tabSignup.removeClass('selected');
	}

	function signup_selected(){
		formModal.addClass('is-visible');
		formLogin.removeClass('is-selected');
		formSignup.addClass('is-selected');
		formForgotPassword.removeClass('is-selected');
		tabLogin.removeClass('selected');
		tabSignup.addClass('selected');
	}

	function forgot_password_selected(){
		formLogin.removeClass('is-selected');
		formSignup.removeClass('is-selected');
		formForgotPassword.addClass('is-selected');
	}



	//IE9 placeholder fallback
	//credits http://www.hagenburger.net/BLOG/HTML5-Input-Placeholder-Fix-With-jQuery.html
	if(!Modernizr.input.placeholder){
		$('[placeholder]').focus(function() {
			var input = $(this);
			if (input.val() == input.attr('placeholder')) {
				input.val('');
		  	}
		}).blur(function() {
		 	var input = $(this);
		  	if (input.val() == '' || input.val() == input.attr('placeholder')) {
				input.val(input.attr('placeholder'));
		  	}
		}).blur();
		$('[placeholder]').parents('form').submit(function() {
		  	$(this).find('[placeholder]').each(function() {
				var input = $(this);
				if (input.val() == input.attr('placeholder')) {
			 		input.val('');
				}
		  	})
		});
	}



	$.validate({
		form : '#log_in_form',
        modules : 'security',
    onSuccess : function($form) {
      log_in_form($("#signin-email").val(),$("#signin-password").val());
      return false; // Will stop the submission of the form
    }
});

	$.validate({
		form : '#sign_up_form',
        modules : 'security',
    onSuccess : function($form) {
      sign_up_form($("#signup-username").val(),$("#signup-email").val(),$("#signup-password").val());
      return false; // Will stop the submission of the form
    }
});
	function log_in_form(email, password) {
      firebase.auth().signInWithEmailAndPassword(email, password).then(function(){
      	location.reload();
      } , function(error) {
	  var errorCode = error.code;
	  var errorMessage = error.message;
	  alert(errorMessage)
	})};

	function sign_up_form(username,email, password) {
      
      firebase.auth().createUserWithEmailAndPassword(email, password).then(function(){
      location.reload();
      } , function(error) {
	  var errorCode = error.code;
	  var errorMessage = error.message;
	  alert(errorMessage)
	})
      var user = firebase.auth().currentUser;
		user.updateProfile({
			displayName: username
			}).then(function() {
			// Update successful. ----> redirect to homepage 
			}, function(error) {
				alert(error.message);
			// An error happened. ----> Show alert with errir
		});
  };


    function firebase_init() {
	var config = {
    apiKey: "AIzaSyAT-MtTOD0YQ0sn5Zve_kQ-MODPGAd0KGY",
    authDomain: "iot-open-innovation-lab.firebaseapp.com",
    databaseURL: "https://iot-open-innovation-lab.firebaseio.com",
    storageBucket: "iot-open-innovation-lab.appspot.com",
    messagingSenderId: "614444813852"
  };
  firebase.initializeApp(config);

	};

});




//credits http://css-tricks.com/snippets/jquery/move-cursor-to-end-of-textarea-or-input/
jQuery.fn.putCursorAtEnd = function() {
	return this.each(function() {
    	// If this function exists...
    	if (this.setSelectionRange) {
      		// ... then use it (Doesn't work in IE)
      		// Double the length because Opera is inconsistent about whether a carriage return is one character or two. Sigh.
      		var len = $(this).val().length * 2;
      		this.focus();
      		this.setSelectionRange(len, len);
    	} else {
    		// ... otherwise replace the contents with itself
    		// (Doesn't work in Google Chrome)
      		$(this).val($(this).val());
    	}
	});
};