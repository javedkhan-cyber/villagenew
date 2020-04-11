<?php
include("header1.php");
include ('connection.php');

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


<!-- contact -->
	<div id="contact" class="contact">
		<div class="container"> 
			<div class="agileits-title">
				<h3>Contact us</h3>
			</div>
		</div>	
		<div class="contact-row agileits-w3layouts" style="min-height:50%;">  
			<div class="col-md-5 contact-w3lsleft map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13833.816943576254!2d78.1336887!3d29.9088226!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa3a406d67f5faaa4!2sThe+Village+Restaurant!5e0!3m2!1sen!2sin!4v1501153529865" width="600" height="557" frameborder="0" style="border:0" allowfullscreen></iframe>
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
						<p><a href="mailto:info@example.com">thevillage@gmail.com</a></p>
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
						<p>080065 58463<br></p>
					</div>
					<div class="clearfix"> </div>
				</div> 
				<div class="col-xs-6 address-row" >
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right" style="margin-bottom:4%;">
						<h5>Working Hours</h5>
						<p style="">Mon-Fri : 8:00am to 10:30pm<br/>
						Sat-Sun : 9:00am to 11:30pm</p>
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

<?php
include("footer.php");
?>