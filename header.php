<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<link rel="icon" href="i/favicon.ico" />
<link rel="stylesheet" media="screen" href="c/reset.css" />
<link rel="stylesheet" media="screen" href="c/screen.css" />
   <title>T. B. Scott Library | Merrill, WI | <?php echo $title; ?></title>
   <!-- This script was used to enable HTML5 elements to display properly in older browsers.  It relies on Javascript,
   unlike using divs inside of HTML5 elements; however, as the T. B. Scott&apos;s  computers all have javascript enabled,
   this was considered a reasonable trade off for cleaner HTML -->
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="j/css3-mediaqueries.js"></script>
<![endif]-->

</head>

<body>
<div id="non-footer">
<div id="function-links">
<a id='skip' href='#content' title='Skip Navigation'>Skip Navigation</a>
<ul>
   <li><a href="index.php">Home</a></li>
   <li><a href="calendar.php">Calendar</a></li>
   <li><a href="get_a_card.php">Get a Library Card</a></li>
   <li><a href="hours_directions_contact.php">Hours/Directions/Contact Us</a></li>
   </ul> 
</div> <!-- end function-links -->  
  <header>
  <a href="index.php"><hgroup><h1 id="site-title">T. B. Scott Free Library</h1>
   <h2 id="site-subtitle"><?php echo $title; ?></h2></hgroup></a>
  </header>
  <nav id="primary-nav">
   <ul>
   <?php

   $currentFile = $_SERVER["PHP_SELF"];
   $parts = explode('/', $currentFile);
   $thispage = $parts[count($parts) - 1];
   $nav_structure = array('Books/Music/Movies' => array(
				                        'Catalog' => 'http://vcat.wvls.lib.wi.us/ipac20/ipac.jsp?session=1M55DH3117252.23506&profile=mer--5&menu=search&ts=1255013119707#focus',
							'e-Books' => '',
							'Borrow from Other Libraries' => '',
						        'Magazines &amp; Newspapers' => '',
							'Reading Recommendations' => ''
							),
			  'My Services' => array(
						 'Get a Library Card' => 'get_a_card.php',
						 'Senior Services' => 'senior_services.php',
						 'Reserve Meeting Rooms' => ''
						 ),
			  'Youth/Family' => array(
						  'Teens' => '',
						  'Children &amp; Families' => '',
						  'Children&apos;s Storytime' => ''
						  ),
			  'Events' => array(
					    'Calendar' => 'calendar.php',
					    'Author Readings' => 'author_readings.php',
					    'Community Artshare' => 'community_artshare.php',
					    'Children&apos;s Storytime' => ''
					    ),
			  'Research' => array(
					      'Ask a Librarian' => '',
					      'Genealogy &amp; Local History' => '',
					      'Health Resources' => '',
					      'Government Information' => '',
					      'Financial Resources' => '',
					      'Career Resources' => ''
					      ),
			  'About Us' => array(
					      'Library History' => 'history.php',
					      'People' => 'people.php',
					      'Jobs' => '',
					      'Volunteer' => '',
					      'Friends of the Library' => 'friends.php',
					      'Memorials and Donations' => '',
					      'Hours/Directions/Contact Us' => 'hours_directions_contact.php'));

foreach ($nav_structure as $category => $links){
  echo '<li';
  if ($category === $section) {
    echo ' class="current" ';
  }
  echo ">$category<ul>\n";
        foreach ($links as $text => $url){
	echo '<li';
	if ($url === $thispage){
	  echo ' class="current" ';
	}
	echo "><a href='$url'>$text</a></li>\n";
      }
  
    echo '</ul></li>';
    }
?>
  </ul>
  </nav>
    <div id="content">