<?php 
$title = 'Your library since 1891';
$section = '';
include 'header.php'; ?>

<section id="picture-view">
<h2>Welcome to the T. B. Scott!</h2>
<div id="pane">
  <img id="home-page-picture" src="i/PCMerrill.jpg" width="500" alt="A postcard, displaying the exterior of the T. B. Scott Library."  />
<p id="home-page-caption">A postcard, displaying the exterior of the T. B. Scott Library.</p>
<ul><li><button onClick='displayOne();'>Pic 1</button></li>
<li><button onClick='displayTwo();'>Pic 2</button></li>
<li><button onClick='displayThree();'>Pic 3</button></li>
<li><button onClick='displayFour();'>Pic 4</button></li>
</ul>
</div> <!-- end pane -->
</section> <!-- end picture-view -->
<section id='news'>
<h2>Library News</h2>

<h3>T. B. Scott Gets Fabulous New Webpage</h3>
<p class='date'>Friday, April 29, 2011</p>
<p>A band of intrepid heroes of myth and legend have crafted a new webpage for the T. B. Scott Library, presumably out of the hairs from unicorn manes, the gossamer feathers of the bashful hippogriff, and web standards.</p>
<h3>Werewolves Loose in T. B. Scott</h3>
<p class='date'>Thursday, April 25, 2011</p>
<p>A trio of terrifying beasts of the night were discovered in the stacks, rampaging throgh fiction from C-D to Q-R.  Officers from the B.P.R.D. were soon dispatched, and ended the terrible nightmare with a silver bullet.</p> 
</section> <!-- end news -->

<section id="intro-text">
<h2>Who We Are</h2>
  <p>Welcome to T. B. Scott Free Library, Merrill&apos;s public library since 1891. Two-time &quot;Wisconsin’s Library of the Year&quot; Award Winner (2002, 1977), T.B. Scott Library is a member of the Wisconsin Valley Library Service (WVLS).</p>

<p>Established by a $10,000 bequest from lumberman and former state legislator Thomas Blythe Scott, the Merrill library opened in March 1891. The library was among the first twenty public libraries in the state, was one of the original Carnegie Foundation grant recipients and is listed on the National Register of Historic Places. 2011 marks the 100th anniversary of the Carnegie Building.</p>
</section> <!-- end intro-text -->
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
