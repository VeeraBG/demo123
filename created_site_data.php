 <?php 
 session_start();
 //single site detailes
include_once('dbFunction.php');
$obj = new dbFunction();


    if(isset($_REQUEST['id'])){
    	$id = $_REQUEST['id'];

    	$sql = "SELECT new_website.website_id,new_website.site_text,new_website.site_contacts,
    					new_website.domain_name,
    					web_header.img_name,
    					web_banner.banner_name,
    					web_footer.footer_name
				FROM 	new_website
				LEFT JOIN web_header ON new_website.website_id = web_header.website_id
				LEFT JOIN web_banner ON new_website.website_id = web_banner.website_id
				LEFT JOIN web_footer ON new_website.website_id = web_footer.website_id
				where new_website.website_id = '$id'";


					$qry=mysql_query($sql) or die(mysql_error());
					if($qry>=1){
							while($data = mysql_fetch_assoc($qry)){

								//print_r($data);
									
				
     ?> 


<!DOCTYPE html>
<html lang="en">
<?php include("top_header.php"); ?>
<header class="navbar">
<?php //include("header.php"); ?>
</header>
<style>
table,td{
font-size:13px;
}
</style>
<!--End Header-->

<!--Start Container-->

<div id="main" class="container ">
<div class="row">
<?php //include("leftmenu.php"); ?>




<div class="result"> </div>
<!--Start Content-->

<div id="content" class="col-xs-12 col-sm-12">

     
       <div class="clearfix"></div>

		<div style = "border-color:red;">		


 				<div class="row">
		        		<!-- <div class="col-md-12">
								
								<img src="<?php echo $data['img_name'];?>" style = "width: 100%; height: 100px;" class="img-responsive">
								
                  		</div>

                 		 -->
                 		<div class="col-md-12">
	                 		  <div class="col-md-2" style="width: 200px; height: 95px;padding-left: -100px ;left:-15px">
	                 		 		<img src="newsiteimg/logo.jpg" style = "width: 200px; height: 100px;" class="img-responsive">
	                 		 </div>

	                 		 	<!-- color: #b1b1b1;
    font-family: 'Open Sans', sans-serif;
    font-size: 13px; -->

	                 		 <div class="col-md-12" style="width: 950px; height: 95px;color:white;font-family:sans-serif; font-size: 16px;background-color: rgba(26, 164, 127, 0.7);left:2px">
	                 		 		
	                 		 		<span class = "col-md-2 bounce" style="background-color: orange;height: 100px;border-right:solid; ">
	                 		 					<center style="position: relative;top:30px;">HOME</center>
	                 		 	
	                 		 		</span>
	                 		 		<span class = "col-md-2 bounce" style="background-color:rgba(211,52,58,0.76);height: 100px;border-right:solid;"><center style="position: relative;top:30px;">SERVICES</center>
	                 		 		</span>
	                 		 			
	                 		 		<span class = "col-md-2 bounce" style="background-color: orange;height: 100px;border-right:solid;"><center style="position: relative;top:30px">CONTACT US</center></span>
	                 	</div>
	                 	<!-- submenu display -->
	                 	<div>
	                 		 				
	                 	</div>
	                 	<!-- submenu display end-->


                 </div>
                 <div class="row">
		        		<div class="col-md-12" >
								
								<img src="<?php echo $data['banner_name'];?>" style = "width: 99%; height: auto;position: relative;" class="img-responsive">
								
                  		</div>
					</div>


					<div class = "row">
							<div class = "col-md-12">
								<br><br>
							<h5 style = "color: #d3343a; font-size: 30px;
						    font-weight: 100;
						    font-family: 'Roboto', sans-serif;
						    line-height: 20px;
						    position: relative;
						    left: 10px">
								Strengthening the bonds of traditional values with modern homes
								<br><br><small >From Hope to Home, we make our valued customers dreams come true.</small></h5><br><br>



<p class = "col-md-5" style = "display: block;
    font-size: 14px;
    color: #717171;
    line-height: 22px;
    font-weight: 400;
    padding: 8 0 30px 0;">There is a touch of modernity in all our ventures. We adopt best practices from the industry and focus on continuous improvement. Our goal is to provide the best home designs with latest technologies and modern amenities. Our customers demand and expect futuristic gadgets to be implemented in their homes to satisfy their needs of comfort, quality and security. We strive to bring new innovations into our buildings and employ futuristic thinking into our real estate and construction business.

	<span>Gauthami developers</span>
</p>

<h6  style = "color: #d3343a; font-size:16px;
						    font-weight: 100;
						    font-family: 'Roboto', sans-serif;
						    line-height: 20px;
						    position: relative;
						    top: 230px;
						    left: -400px;
						    ">PROTECT AND CONTROL YOUR LIFE WITH ECO</h6>

							</div><br><br>

				</div><br><br><br><br><br>
				<!-- child pics -->
				<div class = "row">
						<div class = "col-md-12" style = "position: relative;top:-250px;left:550px;">
						<img src = "newsiteimg/pic8.png" style = "border-radius: 100%;width: 230px;height: 230px;position: absolute;top:-20px;left:350px;"/>
						
						<img src = "newsiteimg/pic9.png" style = "border-radius: 100%;width: 170px;height: 170px;position: absolute;top:20px;left:200px;"/>
						<img src = "newsiteimg/pic10.png" style = "border-radius: 100%;width: 100px;height: 100px;position: absolute;top:70px;left:115px;"/>
						
						</div>
				</div>

				
					<div class = "row" style = "position: relative;top: 5px;left:-6px;padding: 0px;opacity: 0.5">
							<div class = "col-md-12" style="width: 100%; height: 300px;">
									<div class = "col-md-4">
										<img src="newsiteimg/img1.jpg" style = "width: 100%; height: 300px;padding:0px" class="img-responsive">
									</div>
									<div class = "col-md-4">
										<img src="newsiteimg/build5.jpg" style = "width: 100%; height: 300px;padding:0px" class="img-responsive">
									</div>
									<div class = "col-md-4">
										<img src="newsiteimg/build5.jpg" style = "width: 100%; height: 300px;padding:0px" class="img-responsive">
									</div>
							</div>

					</div><br><br><br>



					   <div class = "row" style = "position: relative;top: 2px">
							<div class = "col-md-12" style="width: 100%; height: auto;">
								<div class = "col-md-5">
									<img src="newsiteimg/pic3.png" style = "border-radius: 100%;width: 60%; height: 300px;padding:0px" class="img-responsive"><br>
									<!-- <img src="newsiteimg/build5.jpg" style = "border-radius: 100%;width: 50%; height: 150px;padding:0px" class="img-responsive"><br>
									<img src="newsiteimg/build5.jpg" style = "border-radius: 100%;width: 50%; height: 150px;padding:0px" class="img-responsive"><br> -->
								</div>
								<div class = "col-md-7">
									<h2 style = "    color: #d3343a;
    font-size: 30px;
    font-weight: 100;
    font-family: 'Roboto', sans-serif;
    line-height: 42px;
    padding: 0 0 40px 0;">Live a life of quality, comfort, security and prosperity
<br><small style = "font-size: 20px;font-weight: 400;">Trust Gauthami with your aspirations</small></h2>

<p style = "    display: block;
    font-size: 14px;
    color: #717171;
    line-height: 22px;
    font-weight: 400;
    padding: 0 0 30px 0;"><span style = "font-size: 14px;font-weight: 400;color:#d3343a;">Gauthami Developers</span> is established just five years ago and today it has emerged as one of the front line construction companies in Hyderabad.<br><br>
The company is managed by an experienced structural engineer V Ravinder Reddy, AMIE M.Tech. Gauthami developers and its sister concerns PrathyushaDevelopers, AbhitejaConstructions, has successfully completed several residential and commercial complexes in prominent places of the city. PrathyushaDevelopers and Abhiteja Constructions are headed by V.Ravinder Reddy and V.Shyam Sunder respectively.
We give value and prominence to our customers by striving to make every project exclusive, by using high quality materials, and completing projects in time.</p>
<h2 style = " color: #d3343a;
    font-size: 24px;
    font-weight: 100;
    font-family: 'Roboto', sans-serif;
    line-height: 24px;
    padding: 40px 0 40px 0;
    text-transform: uppercase;">RELY ON US TO BUILD A STRONG FUTURE</h2><br><br>
								</div>
							</div>

				</div><br>




                 <div class = "row">
		                 <div class="col-md-12 " style = "padding-left:5px">
		                 		 <div class="col-md-6" style = "">
		                 			<img src="<?php echo $data['img_name'];?>" style = "width: 100%; height: 300px;padding:0px" class="img-responsive">

		                 		</div>
		                 		 <div class="col-md-6" style="width: 50%;height: 300px;color:gray"><br>
		                 		
		                 		 		<center><h2>Just enjoy Your space</h2><br><br>
<p style = "    display: block;
    font-size: 14px;
    color: #717171;
    line-height: 22px;
    font-weight: 400;
    padding: 0 0 30px 0;"><span style = "font-size: 14px;font-weight: 400;color:#d3343a;">Green blossoms </span>offers you very many options for leisur and recreation to help you de-stress, that you will be actually amazed. Or, if you’re someone who’s a stickler for an active and sporty lifestyl, just check out the so many ways to keep yourself fir to the core</p></center> 
		                 		</div>

		                 </div>
                 </div>



                 <div class = "row" style = "position: relative;top: 4px;">
							<div class = "col-md-12" style="width: 100%; height: 300px;opacity: 0.7">
								<div class = "col-md-6">
								<img src="newsiteimg/project_2.jpg" style = "width: 100%; height: auto;" class="img-responsive"></div>
								<div class = "col-md-6">
									<img src="newsiteimg/build5.jpg" style = "width: 100%; height: auto;" class="img-responsive">
								</div>
							</div>

				</div><br>



                 <div class="row">
                 		<!-- <div style = "color:silver;box-shadow: 1px 1px 3px 1px silver; width: 100%;height: 100px;background-color: silver">
                 			

                 		</div> -->
		        		<div class="col-md-12">
								<!-- <div class="col-md-2" style = "box-shadow:1px 1px 3px 1px silver;position: relative; top:30px; left: 10px;color:black">
							<span>Site Domain Name &nbsp;&nbsp;-&nbsp;&nbsp;</span><span><a href = "#"><?php echo $data['domain_name'] ?></a></span><br>
							<span>Site Content &nbsp;&nbsp;-&nbsp;&nbsp;</span><span><?php echo $data['site_text'] ?></span><br>
							<span>Site Contact &nbsp;&nbsp;-&nbsp;&nbsp;</span><span><?php echo $data['site_contacts'] ?></span><br>
										 -->
										 <img src="<?php echo $data['footer_name'];?>" style = "width: 100%; height: auto;" class="img-responsive">
								
						</div>
								<!-- <img src="<?php echo $data['footer_name'];?>" style = "width: 100%; height: 350px;" class="img-responsive"> -->
								
                </div>
                  		
                 		 
    	</div><br>

               
                <!--  <div class="row">
		        		<div class="col-md-8">
								
								<img src="<?php echo $image;?>" style = "width: 100%; height: 100px;" class="img-responsive">
								
                  		</div>
                 		 <div class="col-md-2" >Name -</div><div class="col-md-2">asdgdfdasgfsdf<br><br></div>
                 </div> -->
				
				



	<!-- 	<div class="clearfix"></div><br>  
		<div  class= "col-md-3"></div>
			<center><div class= "col-md-1">			
					<button class="btn"  onClick = "deleteButton(<?php echo $id; ?>)" 
 						style="display:block;color:#444;text-decoration:none;padding-left:22%;" >Delete</button>
 						
			</div>

			<div class= "col-md-1" style="margin-right:1%;">
					<button class="btn btn-danger" onClick="editButton(<?php echo $id ?>)" id="edit123" >Edit</button>
			</div></center>
			 -->
	<?php 
		}
	}
}
	?>
</div>
</div>
<div id='sessiondata' style="color:red;"> </div>





<script type="text/javascript">
$(document).ready(function() {

	 $("#ulhome").hide();
   		 $(".home").hover(function(){
       	$("#ulhome").slideToggle(1000, function(){
            alert("The slideToggle() method is finished!");
        });
    });

	$('#input_date').datepicker({setDate: new Date()});
	
});
</script>

<script type="text/javascript">
	function editButton(id) {
		// body...
		var v = confirm("Are you Sure to Update Website");
		//alert(v);
		if(v){
			window.location.replace('http://localhost/mysafehome/safehome/update_website.php?id='+id);
		}
		else{
			alert("you got back");
		}
		//

	}
	function deleteButton(id) {
		// body...
		var v = confirm("Are you Sure to Delete Website");
		if(v){
			window.location.replace('http://localhost/mysafehome/safehome/delete_website.php?id='+id);
		}
		else{
			alert("you got back");
		}
		

	}

</script>
<!-- script type="text/javascript">
function edit(id) {

window.location.replace('http://localhost/mysafehome/safehome/update_website.php');

}
</script> -->

<script type="text/javascript">
	$('li').hover(function(){
    $(this).children('.ulclass_inner').stop().slideToggle(400);
     $(this).children('.ulclass_inner').css({"background-color": "#98bf21", "display":"block"});

});

</script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="http://code.jquery.com/jquery.js"></script>-->
<script src="plugins/jquery/jquery-2.1.0.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src='js/jquery-1.9.1.min.js'></script>
<script type="text/javascript" src="js/jquery.selectBox.js"></script>
<link type="text/css" rel="stylesheet" href="css/jquery.selectBox.css"/>

<script type="text/javascript">
		  $(document).ready(function(){
            $('select').selectBox({ mobile: true });
			$(".table_st_1 tr:odd").addClass("odd");


		});

</script>
<?php include("footer.php"); ?>
<script src="js/footer_js.js"></script><br><br><br><br><br><br><br><br><br>
</body>
</html>







