<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" dir="ltr"

xmlns:content="http://purl.org/rss/1.0/modules/content/"
xmlns:dc="http://purl.org/dc/terms/"
xmlns:foaf="http://xmlns.com/foaf/0.1/"
xmlns:og="http://ogp.me/ns#"
xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"
xmlns:sioc="http://rdfs.org/sioc/ns#"
xmlns:sioct="http://rdfs.org/sioc/types#"
xmlns:skos="http://www.w3.org/2004/02/skos/core#"
xmlns:xsd="http://www.w3.org/2001/XMLSchema#">
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>UDSM - Consultants Directory</title>
		
		<!-- cheki zipi za kufuta
			<link href="<?php echo WEB_ROOT; ?>theme/udsm/modules/system/system.basedaf9.css" rel="stylesheet">
			<link href="<?php echo WEB_ROOT; ?>theme/udsm/modules/system/system.menusdaf9.css" rel="stylesheet">
			<link href="<?php echo WEB_ROOT; ?>theme/udsm/modules/system/system.messagesdaf9.css" rel="stylesheet">
			<link href="<?php echo WEB_ROOT; ?>theme/udsm/modules/system/system.themedaf9.css" rel="stylesheet">
		<link href="<?php echo WEB_ROOT; ?>theme/udsm/modules/system/system.themedaf9.css" rel="stylesheet">-->
		<!--<style type="text/css" media="all">
			@import url("/theme/udsm/modules/system/system.basedaf9.css?ne7jek");
			@import url("theme/udsm/modules/system/system.menusdaf9.css?ne7jek");
			@import url("theme/udsm/modules/system/system.messagesdaf9.css?ne7jek");
			@import url("theme/udsm/modules/system/system.themedaf9.css?ne7jek");
			</style>
			<style type="text/css" media="all">@import url("theme/udsm/modules/field/theme/fielddaf9.css?ne7jek");</style>
			<style type="text/css" media="screen">@import url("theme/udsm/sites/all/modules/flexslider/assets/css/flexslider_imgdaf9.css?ne7jek");</style>
			<style type="text/css" media="all">
			@import url("theme/udsm/modules/node/nodedaf9.css?ne7jek");
			@import url("theme/udsm/modules/search/searchdaf9.css?ne7jek");
			@import url("theme/udsm/modules/user/userdaf9.css?ne7jek");
			@import url("theme/udsm/sites/all/modules/views/css/viewsdaf9.css?ne7jek");
			@import url("theme/udsm/sites/all/modules/ckeditor/css/ckeditordaf9.css?ne7jek");
			</style>
			<style type="text/css" media="all">
			@import url("theme/udsm/sites/all/modules/ctools/css/ctoolsdaf9.css?ne7jek");
		</style>-->
		<style type="text/css" media="screen">
			@import url("<?php echo WEB_ROOT; ?>theme/udsm/sites/all/themes/udsm6/styledaf9.css?ne7jek");
		</style>
		<style type="text/css" media="all">
			@import url("<?php echo WEB_ROOT; ?>theme/udsm/sites/all/themes/udsm6/style.responsivedaf9.css?ne7jek");
		</style>
		<script type="text/javascript" src="<?php echo WEB_ROOT; ?>theme/udsm/sites/all/themes/udsm6/jquery1cc4.js?v=1.4.4"></script>
		<script type="text/javascript" src="<?php echo WEB_ROOT; ?>theme/udsm/misc/jquery.once7839.js?v=1.2"></script>
		<script type="text/javascript" src="<?php echo WEB_ROOT; ?>theme/udsm/misc/drupaldaf9.js?ne7jek"></script>
		<script type="text/javascript" src="<?php echo WEB_ROOT; ?>theme/udsm/sites/all/themes/udsm6/scriptdaf9.js?ne7jek"></script>
		<script type="text/javascript" src="<?php echo WEB_ROOT; ?>theme/udsm/sites/all/themes/udsm6/script.responsivedaf9.js?ne7jek"></script>
		
		<!-- Menu css -->
		<link href="<?php echo WEB_ROOT; ?>css/menustyles.css" rel="stylesheet">
		<!-- end of Menu css -->
		
		<!-- login css -->
		
		<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>css/login.css">
		<!-- end of login css -->
		
		<!-- login js -->
		
		<script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/login.js"></script>
		<!-- end of login css -->
		
		<!-- button css -->
		
		<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>css/normalize.css">
		
		<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>css/buttonstyle.css">
		<!-- end of button css -->	
		
		<!-- Bootstrap core CSS -->
		<link href="<?php echo WEB_ROOT; ?>css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo WEB_ROOT; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
		<link href="<?php echo WEB_ROOT; ?>css/dataTables.bootstrap.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT; ?>css/jquery.dataTables.css">
		<script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>js/jquery.js"></script>
		<script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>js/jquery.dataTables.js"></script>
		
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				var t = $('#example').DataTable( {
					"columnDefs": [ {
						"searchable": false,
						"orderable": false,
						"targets": 1
					} ],
					"order": [[ 3, 'asc' ]]
				} );
				
				t.on( 'order.dt search.dt', function () {
					t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
						cell.innerHTML = i+1;
					} );
				} ).draw();
			} );
			
			/*$(document).ready(function() {
				var t = $('#example').DataTable( {
				"columnDefs": [ {
				"searchable": false,
				"orderable": false,
				"targets": 2
				} ],
				//vertical scroll
				"scrollY":        "400px",
				"scrollCollapse": true,
				//ordering start at column 2
				"order": [[ 2, 'asc' ]]
				} );
				
				t.on( 'order.dt search.dt', function () {
				t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
				cell.innerHTML = i+1;
				} );
				} ).draw();
				} );
			*/
			/*$(document).ready(function() {
				$('#example').dataTable( {
				"pagingType": "full_numbers"
				} );
			} );*/
			/*$(document).ready(function() {
				$('#example').dataTable();
				} );
			*///scroll vertical
			/*$(document).ready(function() {
				$('#example').dataTable( {
				"scrollY":        "200px",
				"scrollCollapse": true,
				"paging":         false
				} );
				} );
			*/       
		</script>
		
		<!-- Custom styles for this template -->
		<!--<link href="<?php //echo WEB_ROOT; ?>css/offcanvas.css" rel="stylesheet">-->
		
		<!-- Menu css -->
		<link href="<?php echo WEB_ROOT; ?>css/menustyles.css" rel="stylesheet">
		<!-- end of Menu css -->
		
		<?php
			//login confirmation
			//studconfirm_logged_in();
		?>
	</head>
	<body class="html not-front not-logged-in no-sidebars page-node page-node- page-node-125 node-type-page" >
		
		<div id="udsm6-main">
			<header class="udsm6-header">
				
				<div class="udsm6-shapes">
					
				</div>
				<div class="udsm6-headline">
					<a href="http://www.udsm.ac.tz" title = "University of Dar es salaam">University of Dar es Salaam</a><br />
				</div>  
				<div class="udsm6-slogan">
					<a href="index.html" title = "University of Dar es salaam">University Consultancy Bureau || Consultants Directory</a>
				</div>  
				
			</header>
			<nav class="udsm6-nav">
				
				<div class="region region-navigation">
					<ul class=" udsm6-hmenu ">
						<li class="first leaf"><a href="http://www.udsm.ac.tz" title="">University Home</a></li>
						<li class="leaf"><a href="<?php echo WEB_ROOT; ?>" title="">Consultants Directory</a></li>
						<li class="leaf"><a href="<?php echo WEB_ROOT; ?>officer/login.php" title="">Reporting Tool</a></li>
					</ul>
					
				</nav>
				
				
				<div class="udsm6-sheet clearfix">
					<!--<div class="panel panel-primary">-->
					 	<?php require_once $content;?>
					<!--</div>	-->
					
				</div>	
				<!--</div>
					</div>
					</div> 
					</div>
					</div>
					
					
					</article>	</div>
					</div>
					</div>
					</div>
					</div>
					
					
					</div>
				</div>-->
			</div>
			</div><div id="banner6">  <div class="region region-banner6">
				<div class="block block-views" id="block-views-icon-banner-bottom-block">
					<div class="content">
						<div class="view view-icon-banner-bottom view-id-icon_banner_bottom view-display-id-block view-dom-id-ff076c391675192b53622befc584a614">
							
						</div></div>
				</div>
			</div>
		</div>
	</div>
	
</div>


</body>
</html>

	<hr>
	<footer>
		<p align="center">&copy; University of Dar es Salaam - Consultancy Bureau <?php echo date('Y') ?></p>
		<!--      <script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>-->
		<!-- button css
			<link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans:700' rel='stylesheet' type='text/css'>
			
			<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
		<!-- end of button css -->
		<script src="<?php echo WEB_ROOT; ?>js/tooltip.js"></script>
		<!--     <script src="assets/js/jquery.js"></script>>-->
		<script src="<?php echo WEB_ROOT; ?>js/bootstrap.min.js"></script>
		<script src="<?php echo WEB_ROOT; ?>js/popover.js"></script>
		<script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
		<script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
		
		<script type="text/javascript">
			$('.form_curdate').datetimepicker({
				language:  'en',
				weekStart: 1,
				todayBtn:  1,
				autoclose: 1,
				todayHighlight: 1,
				startView: 2,
				minView: 2,
				forceParse: 0
			});
			$('.form_bdatess').datetimepicker({
				language:  'en',
				weekStart: 1,
				todayBtn:  1,
				autoclose: 1,
				todayHighlight: 1,
				startView: 2,
				minView: 2,
				forceParse: 0
			});
		</script>
		<script>
			function checkall(selector)
			{
				if(document.getElementById('chkall').checked==true)
				{
					var chkelement=document.getElementsByName(selector);
					for(var i=0;i<chkelement.length;i++)
					{
						chkelement.item(i).checked=true;
					}
				}
				else
				{
					var chkelement=document.getElementsByName(selector);
					for(var i=0;i<chkelement.length;i++)
					{
						chkelement.item(i).checked=false;
					}
				}
			}
			function checkNumber(textBox){
				while (textBox.value.length > 0 && isNaN(textBox.value)) {
					textBox.value = textBox.value.substring(0, textBox.value.length - 1)
				}
				textBox.value = trim(textBox.value);
			}
			//
			function checkText(textBox)
			{
				var alphaExp = /^[a-zA-Z]+$/;
				while (textBox.value.length > 0 && !textBox.value.match(alphaExp)) {
					textBox.value = textBox.value.substring(0, textBox.value.length - 1)
				}
				textBox.value = trim(textBox.value);
			}
			function calculate(){  
				
				var first = document.getElementById('first').value; 
				var second = document.getElementById('second').value; 
				var third = document.getElementById('third').value;  
				var fourth = document.getElementById('fourth').value;  
				
				var totalVal = parseInt(first) + parseInt(second) + parseInt(third) + parseInt(fourth) ;
				document.getElementById('finalave').value = totalVal;
				document.getElementById('finalave').value = Math.round((parseInt(totalVal)/4));  
			}
		</script>     
		
	</footer>
</body>
</html>																																					