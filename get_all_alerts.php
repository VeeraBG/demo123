<?php
$page="alert";
include_once('dbFunction.php');
$obj = new dbFunction();

?>


<li data-content="inbox" class="selected">
			<!--Margin Controler-->
			   <div class="col-xs-12 col-sm-12 col-md-12" >
			  <!--Text Editor Box-->

<form name="" id="form1" action="alert_insert.php" method="post" enctype="multipart/form-data">


			 <div class="col-xs-6 col-sm-8 col-md-5 editor-box">

<textarea 	rows="5" cols="50" class="editable" g_editable="true"  contenteditable="plaintext-only" aria-labelledby="186" dir="LTR" name="content123" id="content123" class="form-control" placeholder="Shared text here" value="" >	</textarea>	  
		

			  	 			 <div class="row" style="display:none;" id="video">
		

<br>
	 <input type="file" name="myvideo" id="myvideo" placeholder="Video Upload:" >
			 <br><br><br>


			 </div>
<div class="row" style="display:none;" id="link">
		

<br>

		<input type="text" name="link123" id="link123" class="form-control" placeholder="link" value="" >

			 </div>
	 			 <div class="row" style="display:none;" id="photo">
		

<br>
	 <input type="file" name="myfiles[]" id="myfiles" placeholder="Photos Upload:" value=""  >
			 <br><br><br>


			 </div>
		<input type="hidden" name="type_name" id="typename" class="form-control" placeholder="link" value="text"/>
			  <div class="iH">
				<div class="j7 Be" guidedhelpid="sharebox_text">
				<div class="m7"><div class="mB k7"></div>
				<div class="mB l7"></div>
				</div>
				<span role="button" class="d-s aj oqa" tabindex="0" style="-webkit-user-select: none;">
					<div class="yl lH"></div>
					<div class="dv" id="mytext" onclick="text();">Text</div>
				</span></div>
				
				<div class="j7 " guidedhelpid="sharebox_photos">
					<div class="m7"><div class="mB k7"></div>
					<div class="mB l7"></div>
				</div>
				<span role="button" class="d-s aj nqa" tabindex="0" style="-webkit-user-select: none;">
					<div class="yl FD"></div>
						<div class="dv"  id="photo"  onclick="photos();">Photos</div>
				</span>
				</div>
				
				<div class="j7 " guidedhelpid="sharebox_link">
					<div class="m7">
						<div class="mB k7"></div>
						<div class="mB l7"></div>
					</div>
					<span role="button" class="d-s aj mqa" tabindex="0" style="-webkit-user-select: none;">
					<div class="yl kH"></div>
					<div class="dv"  onclick="link();" >Link</div>
					</span>
				</div>
				
				<div class="j7 " guidedhelpid="sharebox_video">
					<div class="m7">
						<div class="mB k7"></div>
						<div class="mB l7"></div></div>
							<span role="button" class="d-s aj pqa" tabindex="0" style="-webkit-user-select: none;">
							<div class="yl mH"></div>
							<div class="dv"  onclick="video();">Video</div>
							</span>
						</div>
			
						
			  </div>
			  <div class="footer-editor">
				<!-- <div role="button" class="send-editor" id="save" name="save" guidedhelpid="sharebutton" aria-disabled="true">Send</div>  -->
<input type="submit" name="mysubmit"  class="send-editor" value="Send"> 
				<div role="button" class="cancel-editor" guidedhelpid="sharebutton" aria-disabled="true">Cancel</div>
			  </div>
			  </div>
			  
			  </form>
			  <!--text editor box-->
			  
			  
			   <!--Comments Box-->
			   
			   <?php
			  $admin_id=$_SESSION['adminid'];
			   $get_qry=mysql_query("select * from alerts ORDER BY alerts_id DESC") or die(mysql_error());
			   
			   if(mysql_num_rows($get_qry)>0)
			   {
			   while($get_data=mysql_fetch_array($get_qry))
			   {
			   $usertype=$get_data['alerts_usertype'];
			   $show_data=$get_data['alerts_type'];
			   if($usertype=="admin")
			   {
			   $get_login_data=mysql_query("select * from admin where admin_id=".$admin_id);
			   if(mysql_num_rows($get_login_data)>0)
			   {
			   	  $logged_details=mysql_fetch_array($get_login_data);
			   }
			   }
		
			?>
			   
			  <div class="col-xs-6 col-sm-6 col-md-5 data-box">
			  <div class="panel-top-post">
			  <div class="left-pst-box"><img src="uploads/adminimages/<?php echo $logged_details['admin_image']; ?>"></div>
			  <div class="name-pst-box"><h4 class="name-pst"><?php echo $logged_details['admin_name'];?></h4>
			   <span class="text-info-pst">Shared Post<span class="text-info-pst-a">
			   <a href="#">
			<?php 
			
			$date = $get_data['alerts_date'];
		
$date = strtotime($date);
$var=date('H', $date);
$timevar=date('H:i', $date);
	 if($var<=12)
	 {
	 $show="AM";
	 	echo $timevar.' '.$show;
	 }
	 else if($var>12)
	 {
	  $show="PM";
	 	echo $timevar.' '.$show;
	 }
		?>	
			   </a></span></span> 
				</div>
			  <p class="text-black-pst">
			  
			  			<?php echo $get_data['alerts_text'];?>
			  
			  </p>
			  </div>
			  
			  <div class="img-post">
			  
			  <?php
			  if($show_data=="link")
			  {
			  echo "<b>Link: </b><a href='".$get_data['alerts_data']."' target='_new'>".$get_data['alerts_data']."</a>";
			  }
			  else if($show_data=="photos")
			  {

			  ?>
			  <img src="uploads/alerts/<?php echo $get_data['alerts_data']; ?>" style="max-height:230px; max-width:346px;" class="img-responsive">
			  <?php 
			  } 
			  else if($show_data=="video") 
			  { 
			  ?> 
		<video width="320" height="240" controls>
  <source src="<?php echo $siteurl;?>uploads/alerts/<?php echo $get_data['alerts_data']; ?>" type="video/mp4">

</video>
<?php } ?>

			  </div>
			  
			  </div>
			  
			 <?php 
			     	   }
			   }
			   
			   ?>
			  <!--Comments box-->
			  
			  
			  
			  </div>
			  <!--Margin Controler-->
		</li>