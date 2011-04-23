<?php 
$title = 'Your library since 1891';
$section = '';
include 'header.php'; ?>

<section id="picture-view">
<h2>Welcome to the T. B. Scott!</h2>
<div id="pane">
  <img id="home-page-picture" src="i/PCMerrill.jpg" width="500px" alt="A postcard, displaying the exterior of the T. B. Scott Library."  />
<p id="home-page-caption">A postcard, displaying the exterior of the T. B. Scott Library.</p>
<ul><li><button onClick='displayOne();'>Pic 1</button></li>
<li><button onClick='displayTwo();'>Pic 2</button></li>
<li><button onClick='displayThree();'>Pic 3</button></li>
<li><button onClick='displayFour();'>Pic 4</button></li>
</ul>
</div> <!-- end pane -->
</section> <!-- end picture-view -->
<section id="intro-text">
<h2>Who We Are</h2>
  <p>Welcome to T. B. Scott Free Library, Merrill&apos;s public library since 1891. Two-time &quot;Wisconsin’s Library of the Year&quot; Award Winner (2002, 1977), T.B. Scott Library is a member of the Wisconsin Valley Library Service (WVLS).</p>

<p>Established by a $10,000 bequest from lumberman and former state legislator Thomas Blythe Scott, the Merrill library opened in March 1891. The library was among the first twenty public libraries in the state, was one of the original Carnegie Foundation grant recipients and is listed on the National Register of Historic Places. 2011 marks the 100th anniversary of the Carnegie Building.</p>
</section> <!-- end intro-text -->
<section id="sitemap">
<h2>Sitemap</h2>
  <div class="category">
   <h3>Books/Music/Movies</h3>
   <ul>
<li><a href="http://vcat.wvls.lib.wi.us/ipac20/ipac.jsp?session=1M55DH3117252.23506&amp;profile=mer--5&amp;menu=search&amp;ts=1255013119707#focus">Catalog</a></li>
<li><a href="">e-Books</a></li>
<li><a href="">Borrow from Other Libraries</a></li>
<li><a href="">Magazines &amp; Newspapers</a></li>
<li><a href="">Reading Recommendations</a></li>
</ul>
</div>
<div class="category">
<h3>My Services</h3>
<ul>
<li><a href="get_a_card.php">Get a Library Card</a></li>
<li><a href="senior_services.php">Senior Services</a></li>
<li><a href="">Reserve Meeting Rooms</a></li>
</ul>
</div>
<div class="category">
<h3>Youth/Family</h3>
<ul>
<li><a href="">Teens</a></li>
<li><a href="">Children &amp; Families</a></li>
<li><a href="">Children&apos;s Storytime</a></li>
</ul>
</div>
<div class="category">
<h3>Events</h3>
<ul>
<li><a href="calendar.php">Calendar</a></li>
<li><a href="author_readings.php">Author Readings</a></li>
<li><a href="community_artshare.php">Community Artshare</a></li>
<li><a href="">Children&apos;s Storytime</a></li>
</ul>
</div>
<div class="category">
<h3>Research</h3>
<ul>
<li><a href="">Ask a Librarian</a></li>
<li><a href="">Genealogy &amp; Local History</a></li>
<li><a href="">Health Resources</a></li>
<li><a href="">Government Information</a></li>
<li><a href="">Financial Resources</a></li>
<li><a href="">Career Resources</a></li>
</ul>
</div>
<div class="category">
<h3>About Us</h3>
<ul>
<li><a href="history.php">Library History</a></li>
<li><a href="people.php">People</a></li>
<li><a href="">Jobs</a></li>
<li><a href="">Volunteer</a></li>
<li><a href="friends.php">Friends of the Library</a></li>
<li><a href="">Memorials and Donations</a></li>
<li><a href="hours_directions_contact.php">Hours/Directions/Contact Us</a></li>
</ul>
</div>
</section> <!-- end sitemap -->
<script>
function displayOne(){
  document.getElementById('home-page-picture').src = 'i/PCMerrill.jpg';
  document.getElementById('home-page-picture').alt = 'A postcard, displaying the exterior of the T. B. Scott Library.';
  document.getElementById('home-page-caption').innerHTML = 'A postcard, displaying the exterior of the T. B. Scott Library.';
};
function displayTwo(){
  document.getElementById('home-page-picture').src = 'i/librarycard2.jpg';
  document.getElementById('home-page-picture').alt = 'A postcard, displaying the exterior of the T. B. Scott Library.';
  document.getElementById('home-page-caption').innerHTML = 'A postcard, displaying the exterior of the T. B. Scott Library.';
};
function displayThree(){
  document.getElementById('home-page-picture').src = 'i/tbscottfront.jpg';
  document.getElementById('home-page-picture').alt = 'Photo of the T. B Scott Library sign and front entrance, taken by Cressida Hanson.';
  document.getElementById('home-page-caption').innerHTML = 'Photo of the T. B Scott Library sign and front entrance, taken by Cressida Hanson.';
};

function displayFour(){
  document.getElementById('home-page-picture').src = 'i/tbscottriver.jpg';
  document.getElementById('home-page-picture').alt = 'Photo of the T. B Scott Library as seen from the river in nearby Stange&apos;s Park, taken by Cressida Hanson.';
  document.getElementById('home-page-caption').innerHTML = 'Photo of the T. B Scott Library as seen from the river located in nearby Stange&apos;s Park, taken by Cressida Hanson.';
};
</script>
<?php include 'footer.php'; ?>
