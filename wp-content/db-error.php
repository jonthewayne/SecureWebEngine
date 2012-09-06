<?php // custom WordPress database error page

  header('HTTP/1.1 503 Service Temporarily Unavailable');
  header('Status: 503 Service Temporarily Unavailable');
  header('Retry-After: 600'); // 1 hour = 3600 seconds

  // If you wish to email yourself upon an error
  mail("jshumate@augustineideas.com", "Database Error", "There is a problem with the database!", "From: Db Error Watching");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>



  <meta http-equiv="content-type" content="text/html;charset=utf-8"><title>Website Upgrade</title>
  
  <link rel="Stylesheet" href="http://dl.dropbox.com/u/5429720/maintenance/style.css" type="text/css" media="screen"></head>
  
<body>



<div>

<h1>Hello there! We're doing a bit of maintenance and will be back shortly!</h1>

</div>



</body>
</html>