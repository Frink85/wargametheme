function ouvre(url) {window.open(url,"popup","width=700,height=500,left=100,top=100");}
window.fbAsyncInit = function()
{
   // init the FB JS SDK
    FB.init({
      appId      : '    115104902003522', // App ID from the App Dashboard
      channelUrl : '//envol.fr', // Channel File for x-domain communication
      status     : true, // check the login status upon init?
      cookie     : true, // set sessions cookies to allow your server to access the session?
      xfbml      : true  // parse XFBML tags on this page?
    });
};

// Load the SDK's source Asynchronously
(function(d){
   var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement('script'); js.id = id; js.async = true;
   js.src = "//connect.facebook.net/en_US/all.js";
   ref.parentNode.insertBefore(js, ref);
}(document));
function postToFeed(link, picture, description, title) {
    FB.ui(
    {
       method: 'feed',
       name: title,
       caption:'Partagé via le site Envol',
       description: (description),
       link: link,
       picture: picture
   }
   );
}
jQuery('.fb').click(function(){
    var title = jQuery(this).attr('title');
    var link = jQuery(this).attr('href');
    var picture = jQuery('figure').first().attr('src');
    if(typeof(picture)=='undefined') picture = jQuery('.logo img').attr('src')
    var description = jQuery('html header meta[name=description]').attr('content');
    postToFeed(link, picture, description, title);
    return false;
});