<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

  if (tep_session_is_registered('admin')) {
    $cl_box_groups = array();

    if ($dir = @dir(DIR_FS_ADMIN . 'includes/boxes')) {
      $files = array();

      while ($file = $dir->read()) {
        if (!is_dir($dir->path . '/' . $file)) {
          if (substr($file, strrpos($file, '.')) == '.php') {
            $files[] = $file;
          }
        }
      }

      $dir->close();

      natcasesort($files);

      foreach ( $files as $file ) {
        if ( file_exists(DIR_FS_ADMIN . 'includes/languages/' . $language . '/modules/boxes/' . $file) ) {
          include(DIR_FS_ADMIN . 'includes/languages/' . $language . '/modules/boxes/' . $file);
        }

        include($dir->path . '/' . $file);
      }
    }

    function tep_sort_admin_boxes($a, $b) {
      return strcasecmp($a['heading'], $b['heading']);
    }

    usort($cl_box_groups, 'tep_sort_admin_boxes');

    function tep_sort_admin_boxes_links($a, $b) {
      return strcasecmp($a['title'], $b['title']);
    }

    foreach ( $cl_box_groups as &$group ) {
      usort($group['apps'], 'tep_sort_admin_boxes_links');
    }	
	$adminAppMenu = '';	
	$adminAppMenu .= '<nav id="adminAppMenu" class="col-md-2 d-none d-md-block bg-light sidebar">';
	$adminAppMenu .= '<div class="sidebar-sticky" id="accordion" aria-multiselectable="true">';
	
	$counter = 0;

	foreach ($cl_box_groups as $groups) {
	//$adminAppMenu .= '<div class="card">';	
    
        //$adminAppMenu .= '<div class="card-header" id="collapseListGroupHeading'.$counter.'">';
        $adminAppMenu .= '  <h6 id="collapseListGroupHeading'.$counter.'" class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">';
        $adminAppMenu .= '    <a class="d-flex align-items-center text-muted" data-toggle="collapse" data-parent="#accordion" href="#collapseListGroup'.$counter.'" aria-expanded="false" aria-controls="collapseListGroup'.$counter.'"">';
        $adminAppMenu .= '      <span data-feather="plus-circle"></span> <span class="ml-1">' . $groups['heading'] . '</span>';
        $adminAppMenu .= '    </a>';
        $adminAppMenu .= '  </h6>';
        //$adminAppMenu .= '</div>';        
        
        //$adminAppMenu .= '<div id="collapseListGroup'.$counter.'" class="card-collapse collapse" aria-labelledby="collapseListGroupHeading'.$counter.'">';
		$adminAppMenu .= '<div id="collapseListGroup'.$counter.'" class="card-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading'.$counter.'">';
        //$adminAppMenu .= '  <div class="card-body">';
		$adminAppMenu .= '      <ul class="nav flex-column mb-2">';
			foreach ($groups['apps'] as $app) {               
                $adminAppMenu .= '<li class="nav-item"><a class="nav-link" href="' . $app['link'] . '">' . $app['title'] . '</a></li>';
			}
		$adminAppMenu .= '      </ul>';
		//$adminAppMenu .= '  </div>';
		$adminAppMenu .= '</div>';
		
		//$adminAppMenu .= '</div>';//end card
		$counter++;    
	}
	
	$adminAppMenu .= '	</div>';
	$adminAppMenu .= '</nav>';
	echo $adminAppMenu;
  }
?>
