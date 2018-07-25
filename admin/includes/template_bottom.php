<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/
?>
			</div>
<?php
	if (tep_session_is_registered('admin')) {
		include('includes/column_left.php');
	}
?>		
		
		</div>
	</div>
</div>

<script src="<?php echo tep_catalog_href_link('ext/bootstrap/js/bootstrap.min.js', '', 'SSL'); ?>"></script>
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
<?php require('includes/footer.php'); ?>

</body>
</html>
