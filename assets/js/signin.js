function onLinkedInLoad() {
    if (!IN.User.isAuthorized()) {
       document.getElementById("linkedinLogout").style.visibility="hidden";
    }
    IN.Event.on(IN, "auth", getProfileData);
}

// Linkedin won't let me add parameters in their function so small hack here
var handleLanding = function() {
    trackSignup("landing");
}

// Tracking and animate survey modal
var handleCorporate = function() {
    trackSignup("corporate");
    $('#corpSurvey').addClass('animated bounceInRight');
    $("#corpSurvey").attr("style", "display: inline;");
    $("#corpLogin").attr("style", "display: none;");
}

var liLogin = function() { // Setup an event listener to make an API call once auth is complete
    IN.UI.Authorize().params({"scope":["r_basicprofile", "r_emailaddress"]}).place();
    IN.Event.on(IN, 'auth', handleLanding); //onLinkedinLoad will already handle the getProfileData
}

// Using secondary login function so that it can be embedded into a button and moved around,
// while it doesn't look as pretty it will be easiest to use if we changes pages around
var liLoginCorporate = function() { // Setup an event listener to make an API call once auth is complete
    IN.UI.Authorize().params({"scope":["r_basicprofile", "r_emailaddress"]}).place();
    IN.Event.on(IN, 'auth', handleCorporate); //onLinkedinLoad will already handle the getProfileData
}
        
var closeSession = function(){
    IN.User.logout();
    document.getElementById("linkedinLogout").style.visibility="hidden";
    return true;
}

var getProfileData = function() { // Use the API call wrapper to request the member's basic profile data
    IN.API.Profile("me").fields("id,firstName,lastName,email-address,picture-urls::(original),public-profile-url,location:(name)").result(function (me) {
        document.getElementById("linkedinLogout").style.visibility="visible";
        var profile = me.values[0];
        var id = profile.id;
        var firstName = profile.firstName;
        var lastName = profile.lastName;
        var emailAddress = profile.emailAddress;
        var pictureUrl = profile.pictureUrls.values[0];
        var profileUrl = profile.publicProfileUrl;
        var country = profile.location.name;
        console.log(profile);
        console.log(id);
        console.log(firstName);
        console.log(lastName);
    });
}
