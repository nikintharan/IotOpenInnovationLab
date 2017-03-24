<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-93781643-1', 'auto');
  ga('send', 'pageview');

  // Do not use this for buttons that take you to other pages, use it for stuff like popups.
  var trackClick = function(btnName){
    ga('send', 'event', {
      eventCategory: 'Button',
      eventAction: 'click',
      eventLabel: btnName
    });
  }
</script>