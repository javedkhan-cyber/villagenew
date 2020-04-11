<?php include("header.php");
       include("connection.php");
if(isset($_POST['sub'])){
	$interestedin=$_POST['interestedin'];
	$tbl=$_POST['tbl'];
	$table_no=$_POST['table_no'];
	
	$cname=$_POST['cname'];
	$cno=$_POST['cno'];

$sq= "insert into tbl_reserve(interestedin,tbl,table_no,cname,cno)values('$interestedin','$tbl','$table_no','$cname','$cno')" ;

if(mysqli_query($conn,$sq)){
							echo "<script>alert('Table reserved successfully.')</script>";
						
						}

}

if(isset($_POST['submit'])){
	$message=$_POST['message'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$num=$_POST['num'];

$sq1= "insert into message(fname,lname,email,num,message)values('$fname','$lname','$email','$num','$message')" ;
if(mysqli_query($conn,$sq1)){
							echo "<script>alert('your message has been sent successfully.')</script>";
						
						}
}

?>
<script>
function formValidate(){
	var letters = /^[A-Za-z]+$/;  
if(cname.value.match(letters))  
{  
var phoneno = /^\d{10}$/;  
  if((cno.value.match(phoneno))  
        {  
      return true;  
        }  
      else  
        {  
        alert("please input valid no."); 
		cno.focus();
        return false;  
        }   
}  
else  
{  
alert('Username must have alphabet characters only');  
cname.focus();  
return false;  
}  
}
</script>

<div id="about" class="w3l-about"> 

		<div class="container">
		
			<div class="agileits-title">
				<h3>About Us</h3>
			</div>
			<div class="col-md-6 w3labout-left">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
							<div class="tab-info">
								<p>It is one of the finest restaurant because variety of food is availble at fix price. over all an excellent restaurant to visit.</p>
								<p>The restaurant as such is very nice. Good ambiance. Good seating. Good staff. Reasonably priced. But the food here is its speciality. </p>
							
								<p>Best place for food and really remarkable at night. Love the service and the ambience specially huts and muda's and desi khat type table. </p>
								<p>This is in haridwar near Laksar Road Jagjeetpur Kankhal, Haridwar. </p>
							</div>
						</div>
						
					</div>
				</div>
			</div> 
			<div class="col-md-6 w3labout-right">
				<h5>Who we are</h5>
				<h4>we will provide very good food quality at best price</h4>
				<p>Best place for food and really remarkable at night.</p>
				<p>Standard outlet for family-run chain plating regional Indian and international fare. </p>
								<p>Fantastic food quality and best price</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //about --> 
	<!-- Stats -->
	<div class="row">
			<div class="count-agileits" style="min-height: 546px; ">
				<div id="particles-js"></div>
					
					<div class="count-grids" >
					<h3 class="tittle-w3" style="font-size:230%;padding: 35px;">Handling <span>your needs</span> with care</h3>
					<div class="count-bgcolor-w3ls" style="font-size:150%;">
						<div class="col-md-4 count-grid">
						<i class="fa fa-cutlery" aria-hidden="true"></i>
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='250' data-delay='.5' data-increment="100">250</div>
									<span></span>
									<h5>Products available</h5>
							</div>
						</div>
						<div class="col-md-4 count-grid">
						<i class="fa fa-users" aria-hidden="true"></i>
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='80' data-delay='.5' data-increment="100">80</div>
									<span></span>
									<h5>Clients come back</h5>
							</div>
						</div>
						<div class="col-md-4 count-grid">
						<i class="fa fa-user-plus" aria-hidden="true"></i>
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1052' data-delay='.5' data-increment="100">1052</div>
									<span></span>
									<h5>Site members</h5>
								</div>
						</div>
						<div class="clearfix"></div>
						
						</div>
					</div>
					
			</div>
			</div>
	<!-- //Stats -->   
	<!-- services -->
	<div class="services" id="services">
		<div class="container">   
				<div class="agileits-title">
					<h3>Our Services</h3>
				</div>
				<div class="w3-services-grids" >
				    <div class="col-md-3 col-xs-6 w3l-services-grid">
						<div class="w3ls-services-img">
							<a href="room.php"><i class="fa fa-home" aria-hidden="true"></i></a>
						</div>
						<div class="agileits-services-info">
							<a href="room.php"><h4>Rooms</h4></a>
							<p> </p>
						</div>
					</div> 
					<div class="col-md-3 col-xs-6 w3l-services-grid">
						<div class="w3ls-services-img">
							<a href="order.php"><i class="fa fa-cutlery" aria-hidden="true"></i></a>
						</div>
						<div class="agileits-services-info">
							<a href="order.php"><h4>Online order</h4></a>
							<p> </p>
						</div>
					</div>
					
					
					<div class="col-md-3 col-xs-6 w3l-services-grid">
						<div class="w3ls-services-img">
							<a href="home_delivery.php"><i class="fa fa-phone" aria-hidden="true"></i></a>
						</div>
						<div class="agileits-services-info">
							<a href="home_delivery.php"><h4>Call For Order</h4></a>
							<p>  </p>
						</div>
					</div>
                    <div class="col-md-3 col-xs-6 w3l-services-grid">
						<div class="w3ls-services-img">
							<a href="#table-book"><i class="fa fa-table" aria-hidden="true"></i></a>
						</div>
						<div class="agileits-services-info">
							<a href="#table-book"><h4>Table Reservation</h4></a>
							<p>  </p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div> 
		</div>
	</div>
	<!-- //services -->
	<!-- wthree-slid -->
	<div class="wthree-slid">
		<div class="col-sm-6 col-xs-4 wthree-slid-left" style="min-height:525px;"> 
		</div>
		<div class="col-sm-6 col-xs-8 wthree-slid-right" id="table-book">
			
			<h4 style="margin-bottom:60px;">Table Reservation</h4>
			<form class="form-horizontal" action="" method="post" >
			    <div class="form-group">
				   <div class="col-md-4" >
				        <label class="control-label" style="font-size: 1.1em; color: white;">Interested For </label>
				   </div>
				   <div class="col-md-8">
				        <select class="form-control" name="interestedin" required>
						   <option value="">--SELECT--</option>
						   <option value="Break fast">Break fast</option>
                                                  <option value="Lunch">Lunch</option>	
                                                  <option value="Dinner">Dinner</option>					
                                       </select>
						
				   </div>
				</div>
				<div class="form-group">
				   <div class="col-md-4">
				        <label class="control-label" style="font-size: 1.1em; color: white;">Select Table</label>
				   </div>
				   <div class="col-md-8">
				        <select class="form-control" id="tbl" name="tbl" required>
						      <option value="">--SELECT--</option>
							  <option value="Private Cabin">Private Cabin</option>
							  <option value="Open Cabin">Open Cabin</option>
							  <option value="Open Lawn">Open Lawn</option>
						</select>
						
				   </div>
				</div>
			    <div class="form-group">
				   <div class="col-md-4">
				        <label class="control-label" style="font-size: 1.1em; color: white;">No.of Tables </label>
				   </div>
				   <div class="col-md-8">
				        <select class="form-control" id="table_no" name="table_no" required>
						<option value="">--SELECT--</option>
						    <option value="1">1</option>
                            <option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							</select>
						
				   </div>
				</div>
			    
				<div class="form-group">
				   <div class="col-md-4">
				        <label class="control-label" style="font-size: 1.1em; color: white;">Name</label>
				   </div>
				   <div class="col-md-8">
				        <input type="text" class="form-control" id="cname" name="cname" required>
						
				   </div>
				</div>
				<div class="form-group">
				   <div class="col-md-4">
				        <label class="control-label" style="font-size: 1.1em; color: white;">Contact No</label>
				   </div>
				   <div class="col-md-8">
				        <input type="number" class="form-control" id="cno" name="cno" required>
						
				   </div>
				</div>
				<div class="form-group">
				    <div class="col-md-offset-4">
					    <div class="col-md-12">
						    <button class="btn btn-primary btn-lg" type="submit" name="sub" onSubmit="formValidate()" >Reserve</button>
						</div>
					</div>
				</div>
			</form> 
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- wthree-slid -->
	<!-- gallery -->
	<div id="gallery" class="gallery">
		<div class="container">  
			<div class="agileits-title">
				<h3>Our Gallery</h3>
			</div>
			<div class="gallery-w3lsrow">
				<div class="col-sm-3 col-xs-4 gallery-grids">
					<div>
						<a href="images/05.jpg" data-lightbox="example-set" data-title="">
							<img src="images/05.jpg" class="img-responsive zoom-img img-circle" alt="" style="height:200px;width:200px;border:8px solid black;"/>
							
						</a>
					</div>
				</div>
				<div class="col-sm-3 col-xs-4 gallery-grids">
					<div>
						<a href="images/00.jpg" data-lightbox="example-set" data-title="">
							<img src="images/00.jpg" class="img-responsive zoom-img img-circle" alt="" style="height:200px;width:200px;border:8px solid black;"/>
							
						</a>
					</div>
				</div>
				<div class="col-sm-3 col-xs-4 gallery-grids">
					<div>
						<a href="images/x.jpg" data-lightbox="example-set" data-title="">
							<img src="images/x.jpg" class="img-responsive zoom-img img-circle" alt="" style="height:200px;width:200px;border:8px solid black;"/>
							
						</a>
					</div>
				</div>
				<div class="col-sm-3 col-xs-4 gallery-grids">
					<div>
						<a href="images/t.jpg" data-lightbox="example-set" data-title="">
							<img src="images/t.jpg" class="img-responsive zoom-img img-circle" alt="" style="height:200px;width:200px;border:8px solid black;"/>
							
						</a>
					</div>
				</div>
				<div class="col-sm-3 col-xs-4 gallery-grids">
					<div>
						<a href="images/h.jpg" data-lightbox="example-set" data-title="">
							<img src="images/h.jpg" class="img-responsive zoom-img img-circle" alt="" style="height:200px;width:200px;border:8px solid black;"/>
							
						</a>
					</div>
				</div>
				<div class="col-sm-3 col-xs-4 gallery-grids">
					<div>
						<a href="images/r1.jpg" data-lightbox="example-set" data-title="">
							<img src="images/r1.jpg" class="img-responsive zoom-img img-circle" alt="" style="height:200px;width:200px;border:8px solid black;"/>
							
						</a>
					</div>
				</div>
				<div class="col-sm-3 col-xs-4 gallery-grids">
					<div>
						<a href="images/q.jpg" data-lightbox="example-set" data-title="">
							<img src="images/q.jpg" class="img-responsive zoom-img img-circle" alt="" style="height:200px;width:200px;border:8px solid black;"/>
							
						</a>
					</div>
				</div>
				<div class="col-sm-3 col-xs-4 gallery-grids">
					<div>
						<a href="images/z.jpg" data-lightbox="example-set" data-title="" >
							<img src="images/z.jpg" class="img-responsive zoom-img img-circle" alt="" style="height:200px;width:200px; border:8px solid black;"/>
							
						</a>
					</div>
				</div>
                                  <div class="col-sm-3 col-xs-4 gallery-grids">
					<div>
						<a href="images/Note2.jpg" data-lightbox="example-set" data-title="">
							<img src="images/Note2.jpg" class="img-responsive zoom-img img-circle" alt="" style="height:200px;width:200px;border:8px solid black;"/>
							
						</a>
					</div>
				</div>
				<div class="col-sm-3 col-xs-4 gallery-grids">
					<div>
						<a href="images/Note3.jpg" data-lightbox="example-set" data-title="">
							<img src="images/Note3.jpg" class="img-responsive zoom-img img-circle" alt="" style="height:200px;width:200px;border:8px solid black;"/>
							
						</a>
					</div>
				</div>
				<div class="col-sm-3 col-xs-4 gallery-grids">
					<div>
						<a href="images/Note7.jpg" data-lightbox="example-set" data-title="">
							<img src="images/Note7.jpg" class="img-responsive zoom-img img-circle" alt="" style="height:200px;width:200px;border:8px solid black;"/>
							
						</a>
					</div>
				</div>
				<div class="col-sm-3 col-xs-4 gallery-grids">
					<div>
						<a href="images/Note9.jpg" data-lightbox="example-set" data-title="" >
							<img src="images/Note9.jpg" class="img-responsive zoom-img img-circle" alt="" style="height:200px;width:200px; border:8px solid black;"/>
							
						</a>
					</div>
				</div>    
				<div class="clearfix"> </div> 
			</div>
			<!--  light box js -->
			<script src="js/lightbox-plus-jquery.min.js"> </script> 
			<!-- //light box js--> 
		</div> 
	</div>
	<!-- //gallery -->
	<!-- testimonials -->
<div class="services-w3layouts" id="services">

			<div class="col-md-12 agitsworkw3ls-grid ">
			
			<h3 class="tittle-w3"><span>Always</span> fresh <span>& </span>delicious <span>food</span></h3>
			<p class="para-w3l">The Village is a full-service catering and event planning company dedicated to providing you with exquisite cuisine and fantastic customer service. We offer a variety of menus and design options, for everything from box lunches to full-service plated dinners.</p>
			<div class="services-left-w3-agile">
				<h3 class="tittle-w3 sub-head" ><span>Our </span>Menu</h3>
				<ul >
					<li><i class="fa fa-check" aria-hidden="true" ></i><span>BEVERAGES</span></li>
					<li><i class="fa fa-check" aria-hidden="true"></i>BREAKFASTS</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>LUNCH BUFFETS</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>DINNER BUFFETS</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>PARTY TRAYS</li>
				</ul>
				</div>
				<div class="services-right-w3-agile" >
				<h3 class="tittle-w3 sub-head"><span>Catering</span> for</h3>
				<ul>
					<li><i class="fa fa-check" aria-hidden="true"></i>GRADUATION PARTY</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>WEDDING PARTY</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>BRIDAL SHOWER</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>BIRTHDAY PARTY</li>
					<li><i class="fa fa-check" aria-hidden="true"></i>ANNIVERSARY</li>
				</ul>
				</div>
			</div>
</div>
			
			<div class="clearfix"></div>
<div class="clearfix"></div>
	
	<!-- //testimonials -->
	<!-- team -->
	
	<!-- //team -->

	</div>
	<!-- //blog -->
	<!-- contact -->
	<div id="contact" class="contact">
		<div class="container"> 
			<div class="agileits-title">
				<h3>Contact us</h3>
			</div>
		</div>	
		<div class="contact-row agileits-w3layouts" style="min-height:50%;">  
			<div class="col-md-5 contact-w3lsleft map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13833.816943576254!2d78.1336887!3d29.9088226!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa3a406d67f5faaa4!2sThe+Village+Restaurant!5e0!3m2!1sen!2sin!4v1501153529865" width="600" height="545px" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="col-md-7 contact-w3lsright">
				<h6><span>Contact us </span>If you are our existing customer, we love to hear your experience with us. </h6>
				<div class="col-xs-6 address-row">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Visit Us</h5>
						<p>Laksar Rd, Shivpuri Colony,  <br> Jagjeetpur, Haridwar, Uttarakhand-249404. </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-xs-6 address-row w3-agileits">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Mail Us</h5>
						<p><a href="mailto:ahluwaliaanshul@icloud.com">ahluwaliaanshul@icloud.com</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-sm-12" >
				<div class="col-xs-6 address-row">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Call Us</h5>
						<p>08006558463 / 08393000937<br></p>
						<p>08393000938 / 08393000939<br></p>
					</div>
					<div class="clearfix"> </div>
				</div> 
				<div class="col-xs-6 address-row" >
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right" style="margin-bottom:4%;">
						<h5>Working Hours</h5>
						<p style="">Sun-Sat : 8:00am to 12:00pm<br/>
						</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				</div>
				<div class="clearfix"> </div>	
			</div>
			<div class="clearfix"> </div>
		</div>	
		<div class="container" > 
			<div class="contact-w3ls-row">
				<form action="#" method="post">
					<div class="col-md-5 col-sm-5 contact-right agileits-w3layouts">
						<textarea name="message" placeholder="Message" required=""></textarea>
					</div>
					<div class="col-md-7 col-sm-7 contact-left agileits-w3layouts" >
						<input type="text" name="fname" placeholder="First Name" required="">
						<input type="text" class="email" name="lname" placeholder="Last Name" required="">
						<input type="text" name="num" placeholder="Mobile Number" required="">
						<input type="email"  class="email" name="email" placeholder="Email" required="">
						<input type="submit" name="submit" value="SUBMIT">
					</div> 
					<div class="clearfix"> </div> 
				</form>
			</div>  
		</div> 
	</div>
	<!-- //contact -->  
	<!-- footer -->
	<?php include("footer.php");?>