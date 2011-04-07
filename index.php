<?php 
$title = 'Hours, Directions, and Contact Info';
include 'header.php'; ?>
<section id="hours">
<h2>Library Hours</h2>
<h3>General Hours:</h3>
<ul>
<li><em>Mon - Thurs</em> : 9:30 am - 8 pm</li>
<li><em>Friday</em> : 9:30 am - 6 pm</li>
<li><em>Saturday</em> : 9:30 am - 4 pm</li>
<li><em>Sunday</em> : Noon - 4 pm</li>
</ul>

<h3>T. B. Scott will be closed:</h3>
<p>January 1-2, April 24, May 30, July 4, September 5, November 23 at 5pm and 24, December 23 and 26.</p>


<h3>Summer Hours:</h3>
<p>Summer hours begin May 27, 2011.</p>
<ul>
<li><em>Mon - Thurs</em> : 9:30 am - 8 pm</li>
<li><em>Friday</em> : 9:30 am - 5 pm</li>
<li><em>Saturday</em> : 9:30 am - 1 pm</li>
<li><em>Sunday</em> : Closed</li>
</ul>
</section> <!-- end hours -->

<section id="contact">
<h2>Contact Us</h2>
<ul id="staff-list">
<li><strong>Director:</strong> Stacy Stevens <a href="mailto:stevens@wvls.lib.wi.us"> stevens@wvls.lib.wi.us</a></li>
<li><strong>Outreach Services to seniors & the homebound:</strong> Sandra Lussenhop <a href="mailto:sluss@wvls.lib.wi.us">sluss@wvls.lib.wi.us </a> (or call 715-536-7191)</li>
<li><strong>Asst. Director, Head of Adult Dept:</strong> Don Litzer <a href="mailto:dlitzer@wvls.lib.wi.us">dlitzer@wvls.lib.wi.us</a> </li>
<li><strong>Head of Youth Services Department:</strong> Linda Schuster <a href="mailto:schuster@wvls.lib.wi.us">schuster@wvls.lib.wi.us</a> </li>
<li><strong>Supervisor of Reference and Interlibrary Loan:</strong> Donna Hertel <a href="mailto:merrillreflib@yahoo.com">merrillreflib@yahoo.com</a></li>
<li><strong>System Administrator, Circulation Coordinator:</strong> Eleanor Schwartz <a href="mailto:schwartz@wvls.lib.wi.us">schwartz@wvls.lib.wi.us</a></li>
<li><strong>Bookkeeper:</strong> Susan Bauer <a href="mailto:sbauer@wvls.lib.wi.us">sbauer@wvls.lib.wi.us</a> </li>
<li><strong>Maintenance Supervisor:</strong> Michael Schroeder <a href="mschroed53@hotmail.com">mschroed53@hotmail.com</a> </li>
</ul>
</section> <!-- end contact -->

<section id="directions">
<h2>Map and Directions</h2>
<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=106+West+First+Street+Merrill,+WI+54452&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=42.987658,96.152344&amp;ie=UTF8&amp;hq=&amp;hnear=106+1st+St,+Merrill,+Wisconsin+54452&amp;ll=45.184033,-89.701653&amp;spn=0.025711,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><p>View <a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=106+West+First+Street+Merrill,+WI+54452&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=42.987658,96.152344&amp;ie=UTF8&amp;hq=&amp;hnear=106+1st+St,+Merrill,+Wisconsin+54452&amp;ll=45.184033,-89.701653&amp;spn=0.025711,0.036478&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">T B Scott Free Library</a> in a larger map</p>
<p>Get directions from wherever you are!</p>
<form action="http://maps.google.com/maps"  method="get">
Where are you right now?:
<input type="text" name="saddr" />
<input type="hidden" name="daddr" value="106 W. First St., Merrill, WI 54452" />
<input type="submit" value="Go!" />
</form>
</section> <!-- end directions -->

  <?php include 'footer.php'; ?>