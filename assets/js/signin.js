function onLinkedInLoad() {
    if (!IN.User.isAuthorized()) {
       document.getElementById("linkedinLogout").style.visibility="hidden";
    }
    IN.Event.on(IN, "auth", getProfileData);
}

var liLogin = function() { // Setup an event listener to make an API call once auth is complete
    IN.UI.Authorize().params({"scope":["r_basicprofile", "r_emailaddress"]}).place();
    IN.Event.on(IN, 'auth', getProfileData);
}
        
var closeSession = function(){
    IN.User.logout();
    document.getElementById("linkedinLogout").style.visibility="hidden";
    return true;
}

var getProfileData = function() { // Use the API call wrapper to request the member's basic profile data
    document.getElementById("linkedinLogout").style.visibility="visible";
    IN.API.Profile("me").fields("id,firstName,lastName,email-address,picture-urls::(original),public-profile-url,location:(name)").result(function (me) {
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
