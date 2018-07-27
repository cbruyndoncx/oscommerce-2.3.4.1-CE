<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/
?>
			</main>
		</div>
	</div>
</div>
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- <script src="<?php echo tep_catalog_href_link('ext/bootstrap/js/bootstrap.min.js', '', 'SSL'); ?>"></script> -->
<script src="<?php echo tep_catalog_href_link('ext/datepicker/js/bootstrap-datepicker.js', '', 'SSL'); ?>"></script>
<script>
	var nowTemp = new Date(); 
	var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);	
	
	$('#dob').datepicker(
		{
			dateFormat: "<?php echo JQUERY_DATEPICKER_FORMAT; ?>",
			viewMode: 2
		}
	);
	
	$('#dfrom').datepicker(
		{
			dateFormat: "<?php echo JQUERY_DATEPICKER_FORMAT; ?>",
			onRender: function(date) {
				return date.valueOf() > now.valueOf() ? 'disabled' : '';
			}
		}
	);
	$('#dto').datepicker(
		{
			dateFormat: "<?php echo JQUERY_DATEPICKER_FORMAT; ?>",
			onRender: function(date) {
				return date.valueOf() > now.valueOf() ? 'disabled' : '';
			}
		}
	);
</script>
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
				$(panel).addClass('show');
			}
	}
	$('#adminAppMenu').on('shown.bs.collapse', '.card-collapse', function() {
		adminCollapseAppMenu = JSON.parse(localStorage.getItem('adminCollapseAppMenu'));
		if ($.inArray($(this).attr('id'), adminCollapseAppMenu) == -1) {
			adminCollapseAppMenu.push($(this).attr('id'));
		};
		localStorage.setItem('adminCollapseAppMenu', JSON.stringify(adminCollapseAppMenu));
	});
	$('#adminAppMenu').on('hidden.bs.collapse', '.card-collapse', function() {
        adminCollapseAppMenu = JSON.parse(localStorage.getItem('adminCollapseAppMenu'));
		adminCollapseAppMenu.splice( $.inArray($(this).attr('id'), adminCollapseAppMenu), 1 ); 
		localStorage.setItem('adminCollapseAppMenu', JSON.stringify(adminCollapseAppMenu));
	});	
	if ( window.location.pathname == $rootPath || window.location.pathname == $rootPath+'index.php'){ 
		//Close panels if navigate to index
		adminCollapseAppMenu = [];
		localStorage.setItem('adminCollapseAppMenu', JSON.stringify(adminCollapseAppMenu));
		$('#adminAppMenu .card-collapse').removeClass('show');
	}	
</script>
<script>
$('#orderTabs a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
});
</script>
<?php require('includes/footer.php'); ?>

</body>
</html>
