<?php include('header1.php');
      include('connection.php');
?>
<div class="container">
<form class="form-horizontal"  method="post">
	
		<?php
		
	    $cat3 = "select * from menu order by menu_id limit 2";
		$query3 = mysqli_query($conn,$cat3);
		if(mysqli_num_rows($query3) == true){ 
		while($row3 = mysqli_fetch_array($query3)){
			?>
			<div class="col-sm-12" style="border:2px solid black;margin-top:4%;">
		<div class="col-sm-4">
					    <div class="form-group" style="display:none">
				    <input type="text" value="<?php echo $row3['id']; ?>" readonly="true" name="cat_id"/>
				</div>
<h4 class="text-center" style="color:orange;font-weight:bold;font-family:New times roman;padding-top:4%;">
<?php echo strtoupper($row3['menu_name']);  ?></h4><br>
<img src="images/<?php echo $row3['photo']; ?>" style="width:100%;height:250px;padding-bottom:4%;" class="img-circle img-responsive">
</div>
<div class="col-sm-4">
				    <div class="text-center" style="margin-top:40%;">
 <a href="dish_detail1.php?menu_id=<?php echo $row3['menu_id']; ?> && name=<?php echo $row3['menu_name']; ?>" class="btn btn-success">
						  SELECT VEG <?php echo strtoupper ($row3['menu_name']);?>
						</a><hr style="opacity:0.01;background-color:transparent!mportant;">
					</div>
					</div>
		<div class="col-sm-4">
				    <div class="text-center"style="margin-top:40%;">
 <a href="dish_detail2.php?menu_id=<?php echo $row3['menu_id']; ?> && name=<?php echo $row3['menu_name']; ?>" class="btn btn-success">
						  SELECT NONVEG <?php echo strtoupper($row3['menu_name']);?>
						</a><hr style="opacity:0.01;background-color:transparent!mportant;">
					</div>
					
					</div>
				
		</div>
		<?php } } ?>
<?php 
$cat4 = "select * from menu order by menu_id limit 2,4";
		$query4 = mysqli_query($conn,$cat4);
		if(mysqli_num_rows($query4) == true){ 
		while($row4 = mysqli_fetch_array($query4)){
			?>
			<div class="col-sm-12" style="border:2px solid black;margin-top:4%;">

			<div class="col-sm-4">
					    <div class="form-group" style="display:none">
				    <input type="text" value="<?php echo $row4['id']; ?>" readonly="true" name="cat_id"/>
				</div>
<h4 class="text-center" style="color:orange;font-weight:bold;font-family:New times roman;padding-top:4%;">
<?php echo strtoupper($row4['menu_name']);  ?></h4><br>
<img src="images/<?php echo $row4['photo']; ?>" style="width:100%;height:250px;padding-bottom:4%;" class="img-circle img-responsive">
</div>
<div class="col-sm-8">
				    <div class="text-center"style="margin-top:25%;">
 <a href="dish_detail3.php?menu_id=<?php echo $row4['menu_id']; ?> && name=<?php echo $row4['menu_name']; ?>" class="btn btn-success">
						  SELECT <?php echo strtoupper($row4['menu_name']);?>
						</a><hr style="opacity:0.01;background-color:transparent!mportant;">
					</div>
					
					</div>
				
</div>
	
<?php }	
		}
?>
	
	</div>
	
</form>
</div>
		
<?php include('footer.php');
?>