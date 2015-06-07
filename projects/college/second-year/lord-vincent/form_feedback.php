<?php
	$title = $_POST['title'];
	$name = $_POST['name'];
	$comments = $_POST['comments'];
	$email = $_POST['email'];

$to = "ralph.j.mcintyre@gmail.com";
$subject = "New Comments for Lord Vincent Enterprises!";
$message = "Name: $title $name
Email: $email 
Comments: $comments";
$header = "From: info@webhead.hagerstowncc.edu";

mail($to, $subject, $message, $header);
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/Template1.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Lord Vincent Enterprises - Form Feedback</title>
<!-- InstanceEndEditable -->
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" type="image/ico" href="favicon.ico">
<link rel="author" href="humans.txt">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/kickstart-slideshow.css" media="all" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript" src="js/kickstart.js"></script>
<meta name="author" content="Ralph J McIntyre">
<meta name="dcterms.rightsHolder" content="Ralph J McIntyre">
<meta name="dcterms.rights" content="All Rights Reserved">
<meta name="dcterms.dateCopyrighted" content="2013">
<!-- InstanceBeginEditable name="head" -->
<meta name="keywords" content="">
<meta name="description" content="">
<!-- InstanceEndEditable -->
<!-- InstanceParam name="BodyID" type="text" value="" -->
</head>

<body id="">
<ul id="pagenav">
     <li><a href="#pagecontent">Page Content</a></li>
     <li><a href="#pagenavigation">Site Navigation</a></li>
     <li><a href="#pageheader">Page Header</a></li>
     <li><a href="#pagefooter">Page Footer</a></li>
</ul>
	<header><div id="header_logo"><a href="index.html"><img src="images/lord_vincent.gif" alt="lord vincent logo"/></a><a href="#"><img src="images/facebook.gif" alt="lord vincent facebook"/></a><a href="#"><img src="images/twitter.gif" alt="lord vincent twitter"/></a></div></header>
<div id="pageimage"><!-- InstanceBeginEditable name="PageImage" --><img src="images/thumbsup.jpg" alt="thumbsup"><!-- InstanceEndEditable --></div>
    	<nav>
	<a id="pagenavigation"></a>
   	 	<ul>
    	<li id="navHome"><a href="index.html">Home</a></li>
    	<li id="navNews"><a href="news.html">News</a></li>
    	<li id="navAboutUs"><a href="about-us.html">About Us</a></li>
    	<li id="navProducts"><a href="products.html">Products</a></li>        
    	<li id="navLinks"><a href="links.html">Links</a></li>
    	<li id="navContactUs"><a href="contact-us.html">Contact Us</a></li>
    	</ul>
	</nav>
<div id="container">
<section><a id="pagecontent"></a><!-- InstanceBeginEditable name="Contents" -->
<?php

// This page receives the data from contact-us.html
// It will receive: title, name, email, response, comments, and submit in $_POST.

// Create shorthand versions of the variables:
	$title = $_POST['title'];
	$name = $_POST['name'];
	$comments = $_POST['comments'];
	
// Print the received data:
	print "<p>Thank you for your comments.  If necessary (which it probably will be) someone will contact you soon!</p>";
?>
<p>Please click <a href="index.html">here</a> to go back to the home page!</p>
<!-- InstanceEndEditable --></section>
</div>
	<footer><a id="pagefooter"></a>    
    	<ul>
    	<li><a href="index.html">Home</a></li>
    	<li><a href="news.html">News</a></li>
    	<li><a href="about-us.html">About Us</a></li>
    	<li><a href="products.html">Products</a></li>        
    	<li><a href="links.html">Links</a></li>
    	<li><a href="contact-us.html">Contact Us</a></li>
    	</ul>
    </footer>
<p id="copyright">&copy;2013 <a href="mailto:ralph.j.mcintyre@gmail.com">Ralph J McIntyre</a> All Rights Reserved</p>
</body>
<!-- InstanceEnd --></html>
