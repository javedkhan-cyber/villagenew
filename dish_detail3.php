<?php include('header1.php');
      include('connection.php');
	 
?>
<?php if(isset($_REQUEST['menu_id']))
{
$id1=$_REQUEST['menu_id'];
$name=$_REQUEST['name'];
}
?>
      <div class="container"><br>
         <div class="row" style="margin-top:3%;">
          <div class="col-md-12" style="border-radius:5px;box-shadow:0px 2px 3px 2px white;">
            
  
    

               <div id="curr">                <br>
                  <h4 class="text-center" style="color:orange;font-size:20px;"> <?php  echo $name; ?></h4><br>
             
                  <!--content begin-->
                     <table id="food" class="table table-responsive">
                        <tr>
                                 <tbody>
								 <?php  
								 

$query="SELECT * FROM newsub_menu where id='$id1' and cat=1";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($res))
{
	
	
 //$cc="{$row['ids']}";
  //  echo "EMP ID :{$row['ids']}  <br> ";  
	//echo $cc;
	?>
                                  
                                    <tr>
                                        <td style="padding-left:21px;">
				<h4 style="float:left;color:orange;" ><?php echo"{$row['name']}";?><td>&nbsp;&nbsp;&nbsp
</td></td><td style="padding-top:27px;color:orange;text-transform:capitalize;">PRICE<b>:</b><?php echo"{$row['price']}";?>
&nbsp;&#x20a8;</td>
<td style="padding-left:100px;padding-top:20px;">
                <a href="user_login.php" class="btn btn-default" style="color: red;font-size: 20px;text-decoration: none;"><i class="fa fa-plus">&nbsp;ADD</i>	</a></td><td>
                                            
                                          </h4>
                                    
                                        </td>
                                        <td>
                                            
                                           
                                           
                                        </td>
                                    <?php
									}
									?>
                                </tbody>
                  
                        </tr>
                     </table>

                  <!--content end-->
               </div>
              
            </div> 

<?php include('footer.php');?>