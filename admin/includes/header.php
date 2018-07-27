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

<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark shadow">
  <?php echo '<a class="navbar-brand col-sm-3 col-md-2 pl-0" href="' . tep_href_link('index.php') . '">' . tep_image('images/oscommerce-inverse.png', 'osCommerce Online Merchant v' . tep_get_version(), null, null, 'class="d-inline-block align-top"') . '</a>'; ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
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