        <!-- Footer -->
          <footer id="footer">
            <div class="inner">
              <h2 class="major">Follow us <a href="https://www.instagram.com/highergradeco/" target="_blank">@highergradeco</a></h2>
              <ul class="icons">
                <li><a href="https://www.instagram.com/highergradeco/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="https://www.facebook.com/HigherGradeCO/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="https://twitter.com/HigherGradeCO" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
              </ul>

<script type='text/javascript'>
function initMap() {
  var uluru = {lat: 39.7695843, lng: -105.02805360000002};
  var gmap = new google.maps.Map(document.getElementById('gmap'), {
    zoom: 12,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: gmap,
    title: 'Higher Grade'
  });    
}
</script>
<div id="gmap"></div>
<script async defer src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDiFv0DmV5Qu3YIGOu3yEWKKpdVow18uC0&amp;callback=initMap'></script>

              <ul class="contact">
                <li class="fa-home">
                  3111 W.38th Ave.<br />
                  Denver, 80211<br />
                </li>
                <li class="fa-clock-o">Mon-Fri 10:00am - 7:00pm<br />
                  Sat-Sun 10:00am - 7:00pm</li>
                <li class="fa-phone">(303) 955-0186</li>
              </ul>

            <ul class="copyright">
              <li>&copy; Higher Grade</li>
            </ul>
          </footer>

      </div>

    <!-- Scripts -->
      <script src="<?php echo kirby()->urls()->assets() . '/js/jquery.min.js'?>"></script>
      <script src="<?php echo kirby()->urls()->assets() . '/js/jquery.scrollex.min.js'?>"></script>
      <script src="<?php echo kirby()->urls()->assets() . '/js/jquery.scrolly.min.js'?>"></script>
      <script src="<?php echo kirby()->urls()->assets() . '/js/jquery.onvisible.min.js'?>"></script>
      <script src="<?php echo kirby()->urls()->assets() . '/js/skel.min.js'?>"></script>
      <script src="<?php echo kirby()->urls()->assets() . '/js/util.js'?>"></script>
<?php if (($page->uri()=='gallery') || ($page->uri()=='gallerysub')): ?>
      <script src="<?php echo kirby()->urls()->assets() . '/js/jquery.photoswipe-global.js'?>"></script>
      <script src="<?php echo kirby()->urls()->assets() . '/js/photoswipe-ui-default.min.js'?>"></script>
<?php endif ?>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="<?php echo kirby()->urls()->assets() . '/js/jquery.cookie.js'?>"></script>
      <script src="<?php echo kirby()->urls()->assets() . '/js/age-verification.js'?>"></script>
      <script src="<?php echo kirby()->urls()->assets() . '/js/main.js'?>"></script>

      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-102295425-1', 'auto');
        ga('send', 'pageview');
      </script>
  </body>
</html>