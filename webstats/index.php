<?php
	$hostname = strtolower (getenv('HTTP_HOST') );
	$firstchars = substr ($hostname,0,4);
	if ($firstchars == "www.") {
		$domainname = substr($hostname,4);
	}
	else {
		$domainname = $hostname;
	}
 ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>Web server access statistics for <?php print($hostname);?></title>
    <link href="http://www.anno.com/styles/webstats/webstats.css" rel="stylesheet" type="text/css" title="ANNO Cascading Style Sheet"> </head>

<frameset rows="25,*" framespacing="0" frameborder="0">
    <frame name="Navbar" src="http://www.anno.com/styles/webstats/navigationbar.html" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" noresize>
    <frame name="Contents" src="http://<?php print($hostname);?>:2082/awstats.pl?config=<?php print($domainname);?>" marginwidth="0" marginheight="0" scrolling="yes" frameborder="0" noresize>
</frameset>

<body leftmargin="0" topmargin="0" bgcolor="#FFFFFF">
<p>You require a frames compatible browser to view this page.

</body>
</html>
