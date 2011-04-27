<?php 
$title = 'Hours, Directions, and Contact Info';
$section = 'About Us';
include 'header.php'; ?>
<section id="hours">
<h2>Library Hours</h2>
<h3>General Hours:</h3>
<ul>
  <li><i>Mon - Thurs:</i> 9:30 am - 8:00 pm</li>
  <li><i>Friday:</i> 9:30 am - 6 pm</li>
  <li><i>Saturday:</i> 9:30 am - 400 pm</li>
  <li><i>Sunday:</i> Noon - 4:00 pm</li>
</ul>

<h3>T. B. Scott will be closed:</h3>
<p>January 1-2, April 24, May 30, July 4, September 5, November 23 at 5pm and 24, December 23 and 26.</p>


<h3>Summer Hours:</h3>
<p>Summer hours begin May 27, 2011.</p>
<ul>
  <li><i>Mon - Thurs:</i> 9:30 am - 8:00 pm</li>
  <li><i>Friday:</i> 9:30 am - 5:00 pm</li>
  <li><i>Saturday:</i> 9:30 am - 1:00 pm</li>
  <li><i>Sunday:</i> Closed</li>
</ul>
</section> <!-- end hours -->

<section id="contact">
<h2>Contact Us</h2>
  <p>You can reach the T. B. Scott Library by telephone, fax, mail, or by emailing our direction, Stacy Stevens.</p>
<h3>Telephone</h3>
  <p>(715) 536 - 7191</p>
<h3>Fax Machine</h3>
  <p>(715) 536 - 1705</p>
<h3>Snail Mail</h3>
<address>
  T. B. Scott Library<br />
  106 West First Street<br />
  Merrill, WI 54452<br />
</address>
<h3>Email Our Director</h3>
<p>Stacy Stevens - <a href="mailto:stevens@wvls.lib.wi.us">stevens@wvls.lib.wi.us</a></p>
</section> <!-- end contact -->

<section id="directions">
<h2>Map and Directions</h2>
<p><strong>Get directions from wherever you are!</strong></p>
<form action="http://maps.google.com/maps"  method="get">
<label>Where are you right now?:</label>
<input type="text" id="saddr" />
<input type="hidden" id="daddr" value="106 W. First St., Merrill, WI 54452" />
<input type="submit" value="Go!" />
</form>
<iframe id="googlemap" width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=106+West+First+Street+Merrill,+WI+54452&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=42.987658,96.152344&amp;ie=UTF8&amp;hq=&amp;hnear=106+1st+St,+Merrill,+Wisconsin+54452&amp;ll=45.184033,-89.701653&amp;spn=0.025711,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><p>View <a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=106+West+First+Street+Merrill,+WI+54452&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=42.987658,96.152344&amp;ie=UTF8&amp;hq=&amp;hnear=106+1st+St,+Merrill,+Wisconsin+54452&amp;ll=45.184033,-89.701653&amp;spn=0.025711,0.036478&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">T B Scott Free Library</a> in a larger map</p>
</section> <!-- end directions -->

  <?php include 'footer.php'; ?>