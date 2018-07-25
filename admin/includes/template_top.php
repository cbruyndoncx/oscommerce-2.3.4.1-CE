<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/
?>
<!DOCTYPE html>
<html <?php echo HTML_PARAMS; ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET; ?>">
<meta name="robots" content="noindex,nofollow">
<title><?php echo TITLE; ?></title>
<base href="<?php echo ($request_type == 'SSL') ? HTTPS_SERVER . DIR_WS_HTTPS_ADMIN : HTTP_SERVER . DIR_WS_ADMIN; ?>" />
<link href="<?php echo tep_catalog_href_link('ext/bootstrap/css/bootstrap.min.css', '', 'SSL'); ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo tep_catalog_href_link('ext/datepicker/css/datepicker.css', '', 'SSL'); ?>">
<link rel="stylesheet" type="text/css" href="includes/stylesheet.css">
<!-- font awesome -->
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<!--[if IE]><script type="text/javascript" src="<?php echo tep_catalog_href_link('ext/flot/excanvas.min.js', '', 'SSL'); ?>"></script><![endif]-->
<!-- <link rel="stylesheet" type="text/css" href="<?php echo tep_catalog_href_link('ext/jquery/ui/redmond/jquery-ui-1.10.4.min.css', '', 'SSL'); ?>"> -->
<script type="text/javascript" src="<?php echo tep_catalog_href_link('ext/jquery/jquery-2.2.3.min.js', '', 'SSL'); ?>"></script>
<script type="text/javascript" src="<?php echo tep_catalog_href_link('ext/jquery/ui/jquery-ui-1.10.4.min.js', '', 'SSL'); ?>"></script>

<script type="text/javascript" src="<?php echo tep_catalog_href_link('ext/flot/jquery.flot.min.js', '', 'SSL'); ?>"></script>
<script type="text/javascript" src="<?php echo tep_catalog_href_link('ext/flot/jquery.flot.time.min.js', '', 'SSL'); ?>"></script>
<script type="text/javascript" src="includes/general.js"></script>
</head>
<body>

  <div id="bodyWrapper">
	<div class="<?php echo BOOTSTRAP_CONTAINER; ?>">
		<div class="row">
<?php require('includes/header.php'); ?>

<?php
	if (tep_session_is_registered('admin')) {
		echo '<div id="bodyContent" class="col-md-10 col-md-push-2">';	  
	} else {
		echo '<div id="bodyContent" class="col-md-12">';
	}
?>
