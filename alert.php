<?php
$page="alert";
include_once('dbFunction.php');
$obj = new dbFunction();

?>



<!DOCTYPE html>
<html lang="en">
<?php include("top_header.php"); ?>	
<script>
		$(function () {
   $('.panel-google-plus > .panel-footer > .input-placeholder, .panel-google-plus > .panel-google-plus-comment > .panel-google-plus-textarea > button[type="reset"]').on('click', function(event) {
        var $panel = $(this).closest('.panel-google-plus');
            $comment = $panel.find('.panel-google-plus-comment');
            
        $comment.find('.btn:first-child').addClass('disabled');
        $comment.find('textarea').val('');
        
        $panel.toggleClass('panel-google-plus-show-comment');
        
        if ($panel.hasClass('panel-google-plus-show-comment')) {
            $comment.find('textarea').focus();
        }
   });
   $('.panel-google-plus-comment > .panel-google-plus-textarea > textarea').on('keyup', function(event) {
        var $comment = $(this).closest('.panel-google-plus-comment');
        
        $comment.find('button[type="submit"]').addClass('disabled');
        if ($(this).val().length >= 1) {
            $comment.find('button[type="submit"]').removeClass('disabled');
        }
   });
});
		</script>

<body>
<!--Start Header-->
<div id="screensaver">
	  <canvas id="canvas"></canvas>
	  <i class="fa fa-lock" id="screen_unlock"></i> 

</div>
<div id="modalbox">
	  <div class="devoops-modal">
		    <div class="devoops-modal-header">
		      <div class="modal-header-name"> <span>Basic table</span> </div>
		      	<div class="box-icons"> <a class="close-link"> <i class="fa fa-times"></i> </a> </div>
		    </div>
		    <div class="devoops-modal-inner"> </div>
		    <div class="devoops-modal-bottom"> </div>
	  </div>
</div>
<header class="navbar">
	<?php include("header.php"); ?>
</header>
<!--End Header-->
<!--Start Container-->
<div id="main" class="container-fluid">
  <div class="row">
    	<?php include("leftmenu.php"); ?>
    <!--Start Content-->
    <div id="content" class="col-xs-12 col-sm-10"> <a href="#" class="add_page_button">Alerts & Notifications</a>
	
	
	<!--Google Plus Drop down BOX
	<div class="col-xs-5 col-sm-2 col-md-2">
            <div class=" panel-google-plus">
              <div class="dropdown"> <span class="dropdown-toggle" type="button" data-toggle="dropdown"> <span class="[ glyphicon glyphicon-chevron-down ]"></span> </span> </div>
              <div class="panel-google-plus-tags">
                <ul>
                  <li><span class="img-drop"><img src="img/home-icon.png"></span>Home<span class="img-drop-right"><img src="img/drop-arrow.png"></span></li>
                  <li><span class="img-drop"><img src="img/home-icon.png"></span>Profile</li>
                  <li><span class="img-drop"><img src="img/icon-drop-13.png"></span>People</li>
                  <li><span class="img-drop"><img src="img/icon-drop-02.png"></span>Photos</li>
                  <li><span class="img-drop"><img src="img/icon-drop-06.png"></span>Collections</li>
                  <li><span class="img-drop"><img src="img/icon-drop-08.png"></span>Communities</li>
                  <li><span class="img-drop"><img src="img/icon-drop-03.png"></span>Events</li>
                  <li><span class="img-drop"><img src="img/hangout-icon.png"></span>Hangouts</li>
                  <li><span class="img-drop"><img src="img/icon-drop-06.png"></span>Pages</li>
                  <li><span class="img-drop"><img src="img/icon-drop-05.png"></span>Settings</li>
                </ul>
              </div>
            </div>
          </div>
	
	
	gOOGLE PLUS DROP DOWN BOX-->
	
      <div class="clearfix"></div>
        <!--Tabe Search Starts Here-->
        
		<div class="container-fluid"> 
        <div class="row grey-bg">
          <div class="col-xs-12 col-sm-8 col-md-12">
            <div class="cd-tabs">
	<nav>
		<ul class="cd-tabs-navigation">
			<li><a data-content="inbox" id = "all_allert" class="selected" href="#0">All</a></li>
			<li><a  id = "sale" href="#0">Sales/Rent</a></li>
			<li><a  id = "notice" href="#0">Noticeboard</a></li>
			<!-- <li><a data-content="store" href="#0">Links</a></li> -->
		
		</ul> <!-- cd-tabs-navigation -->
	</nav>


	<ul class="cd-tabs-content" id = "all">
		

		<li data-content="new">
			
		</li>

		<li data-content="gallery">
		</li>

		<li data-content="store">
		</li>

		
	</ul> <!-- cd-tabs-content -->
	
	<ul class="cd-tabs-content" id = "sale123" style="display:block;">
		

		<li data-content="new">
			
		</li>

		<li data-content="gallery">
		</li>

		<li data-content="store">
		</li>

		
	</ul> <!-- cd-tabs-content -->
	<ul class="cd-tabs-content" id = "notice" style="display: none;">
		

		<li data-content="new">
			
		</li>

		<li data-content="gallery">
		</li>

		<li data-content="store">
		</li>

		
	</ul> <!-- cd-tabs-content -->



</div>
  </div>
  <div class="clearfix"></div>
</div>
</div>
</div>
</div>
</div>


<div id="divdata"></data>
<!--End Content-->
<!--End Container-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="http://code.jquery.com/jquery.js"></script>-->
<script src='js/jquery-1.9.1.min.js'></script>
<script src="plugins/jquery/jquery-2.1.0.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.selectBox.js"></script>
<link type="text/css" rel="stylesheet" href="css/jquery.selectBox.css"/>
<script type="text/javascript">
		  $(document).ready(function(){
            $('select').selectBox({ mobile: true });
			$(".table_st_1 tr:odd").addClass("odd");
			
		});
	
</script>
<script src="js/footer_js.js"></script>
<script type="text/javascript">
/*$(document).ready(function() {
	$('#input_date').datepicker({setDate: new Date()});
	$("#tabs").tabs();
	$('.create_group_btn').click(function(){
		$('.create_group').show();	
	});
	$('.create_template_btn').click(function(){
		$('.create_template').show();	
	});
	
	
	
	$('.cancel_popup').click(function(){
		$('.popup').hide();	
	});
	
});

jQuery(".editable").click(function(){
	jQuery(".editor-box").addClass("opened-editor");
	jQuery(".footer-editor").css("display", "block");
});

jQuery(".cancel-editor").click(function(){
		jQuery(".editor-box.opened-editor").removeClass("opened-editor");
		jQuery(".footer-editor").css("display", "none");
});
*/
	
	
</script>

<script>
   //$(document).ready(function() {

        // $("#save").click(function (e) {         
          //var content = $('[class^="editable"]').html(); 

// var content1 = $('#content123').val(); 
// var type1 = $("#typename").val();  
// var link1 = $("#link123").val();  


// alert(content1+'..'+type1+'...'+link1);

// $.post("alert_insert.php",{content1:content1,link1:link1,type1:type1},function(data) {  //location.reload();
//$( ".result" ).html('MY ID is - '+data );
// $("#divdata").html(data);
// alert(data);
	// });

	// });
	
// });

</script>


<script type="text/javascript">
	
$(function(){
	//on load...
	$.ajax({ url:  "get_all_alerts.php",
                success: function (response) {
                	alert("ajax called");
            	console.log(response);
            	$("#all").html(response); 
            	//callback(response);
            	             	
        },
        error: function (response) {
            console.log(response);
            //callback(null);
        }
    	});
	//call sale
	$("#sale").click(function(){
		$.ajax({ url:  "get_alert_data.php?data="+"Sale",
                success: function (response) {
                	alert("ajax sale called");
            	console.log(response);
            	$("#all").hide();
            	$("#sale123").html(response);
            	console.log(response); 
            	//callback(response);
            	             	
        },
        error: function (response) {
            console.log(response);
            //callback(null);
        }
    	});
	});
	//notices
});


</script>
<?php include("footer.php"); ?>
</body>
</html>
