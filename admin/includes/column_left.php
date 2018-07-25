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
	$adminAppMenu .= '<div id="adminAppMenu" class="col-md-2  col-md-pull-10">';
	$adminAppMenu .= '<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">';
	
	$counter = 0;

	foreach ($cl_box_groups as $groups) {
		$adminAppMenu .= '<div class="panel panel-default">';
		
		$adminAppMenu .= '	<div class="panel-heading" role="tab" id="collapseListGroupHeading'.$counter.'">';
		$adminAppMenu .= '		<h3 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseListGroup'.$counter.'" aria-expanded="false" aria-controls="collapseListGroup'.$counter.'">' . $groups['heading'] . '</a></h3>';
		$adminAppMenu .= '	</div>';
		
		$adminAppMenu .= '	<div id="collapseListGroup'.$counter.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading'.$counter.'">';
		$adminAppMenu .= '		<ul class="list-group">';
			foreach ($groups['apps'] as $app) {
				$adminAppMenu .= '<li class="list-group-item"><a href="' . $app['link'] . '">' . $app['title'] . '</a></li>';
			}
		$adminAppMenu .= '		</ul>';
		$adminAppMenu .= '	</div>';
		
		$adminAppMenu .= '</div>';
		$counter++;    
	}
	
	$adminAppMenu .= '	</div>';
	$adminAppMenu .= '</div>';
	echo $adminAppMenu;
?>
<script>
	//Set the root
	$rootPath = '<?php echo DIR_WS_ADMIN; ?>';
	
	//Keep state of collapse menu via localStorage
	var adminCollapseAppMenu = localStorage.getItem('adminCollapseAppMenu');
	if (!adminCollapseAppMenu) {
		adminCollapseAppMenu = [];
		localStorage.setItem('adminCollapseAppMenu', JSON.stringify(adminCollapseAppMenu));
	} else {
		adminCollapseAppMenuArray = JSON.parse(adminCollapseAppMenu);
		var arrayLength = adminCollapseAppMenuArray.length;
			for (var i = 0; i < arrayLength; i++) {
				var panel = '#'+adminCollapseAppMenuArray[i];
				$(panel).addClass('in');
			}
	}
	$('#adminAppMenu').on('shown.bs.collapse', '.panel-collapse', function() {
		adminCollapseAppMenu = JSON.parse(localStorage.getItem('adminCollapseAppMenu'));
		if ($.inArray($(this).attr('id'), adminCollapseAppMenu) == -1) {
			adminCollapseAppMenu.push($(this).attr('id'));
		};
		localStorage.setItem('adminCollapseAppMenu', JSON.stringify(adminCollapseAppMenu));
	});
	$('#adminAppMenu').on('hidden.bs.collapse', '.panel-collapse', function() {
		adminCollapseAppMenu = JSON.parse(localStorage.getItem('adminCollapseAppMenu'));
		adminCollapseAppMenu.splice( $.inArray($(this).attr('id'), adminCollapseAppMenu), 1 ); 
		localStorage.setItem('adminCollapseAppMenu', JSON.stringify(adminCollapseAppMenu));
	});	
	if ( window.location.pathname == $rootPath || window.location.pathname == $rootPath+'index.php'){ 
		//Close panels if navigate to index
		adminCollapseAppMenu = [];
		localStorage.setItem('adminCollapseAppMenu', JSON.stringify(adminCollapseAppMenu));
		$('#adminAppMenu .panel-collapse').removeClass('in');
	}	
</script>

<?php
  }
?>
