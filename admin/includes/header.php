<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

  if ($messageStack->size > 0) {
    echo $messageStack->output();
  }
?>
<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php echo '<a class="navbar-brand" style="margin-top: -10px;" href="' . tep_href_link('index.php') . '">' . tep_image('images/oscommerce-inverse.png', 'osCommerce Online Merchant v' . tep_get_version()) . '</a>'; ?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- <table border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2"><?php echo '<a href="' . tep_href_link('index.php') . '">' . tep_image('images/oscommerce.png', 'osCommerce Online Merchant v' . tep_get_version()) . '</a>'; ?></td>
  </tr>
  <tr class="headerBar">
    <td class="headerBarContent">&nbsp;&nbsp;<?php echo '<a href="' . tep_href_link('index.php') . '" class="headerLink">' . HEADER_TITLE_ADMINISTRATION . '</a> &nbsp;|&nbsp; <a href="' . tep_catalog_href_link() . '" class="headerLink">' . HEADER_TITLE_ONLINE_CATALOG . '</a> &nbsp;|&nbsp; <a href="http://www.oscommerce.com" class="headerLink">' . HEADER_TITLE_SUPPORT_SITE . '</a>'; ?></td>
    <td class="headerBarContent" align="right"><?php echo (tep_session_is_registered('admin') ? 'Logged in as: ' . $admin['username']  . ' (<a href="' . tep_href_link('login.php', 'action=logoff') . '" class="headerLink">Logoff</a>)' : ''); ?>&nbsp;&nbsp;</td>
  </tr>
</table> -->