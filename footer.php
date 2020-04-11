<div class="footer">
		<div class="container">
			<div class="footer-top">
				
				<div class="col-md-6 amet-sed amet-medium">
					<div class="agileits-title">
						<h3>Address</h3>
					</div> 
					<p><a href="#" data-toggle="modal" data-target="#myModal">Address</a> Laksar Rd, Shivpuri Colony, Jagjeetpur, Haridwar, Uttarakhand-249404. </p>
					<p><a href="#" data-toggle="modal" data-target="#myModal">Phone</a> 080065 58463 / 083930 00938 / 083930 00938 / 083930 00939</p>
				</div>
				<div class="col-md-6 amet-sed ">
					<div class="agileits-title">
						<h3>Follow Us</h3>
					</div> 
					<div class="w3social-icons"> 
						<ul>
							<li><a href="https://www.facebook.com/THE-VILLAGE-194984887357536/?ref=br_rs"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li> 
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
						</ul>
					</div>
					<div class="support">
						<form action="#" method="post">
							<input type="email" placeholder="Enter email...." required=""> 
							<input type="submit" value="SUBMIT" class="botton">
						</form> 
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<p class="footer-class">© 2017  All Rights Reserved | Design by  <a href="http://m1logixtechnologies.com" target="_blank">M1 logix technology lucknow</a> </p>
		</div>
	</div>
	<!-- //footer --> 
	<!-- modal -->
	<div class="modal about-modal w3-agileits fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body">
					<img src="images/img3.jpg" alt=""> 
					<h4>Blanditiis deleniti</h4>
					<h6>24/01/17</h6>
					<p> </p>
				</div> 
			</div>
		</div>
	</div>
	<!-- //modal -->   
	<!-- js --> 
	<script src="js/jquery-2.2.3.min.js"></script> 
	<!-- //js -->
	<!-- FlexSlider --> 
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- End-slider-script --> 
	<script src="js/SmoothScroll.min.js"></script> 
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->  
	<!-- search jQuery -->
	<script src="js/search.js"></script>
	<!-- //search jQuery --> 
	<!-- Progressive-Effects-Animation-JavaScript -->  
	<script type="text/javascript" src="js/numscroller-1.0.js"></script>
	<!-- //Progressive-Effects-Animation-JavaScript --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>