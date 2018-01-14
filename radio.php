 <?php ob_start();?>
<?php
require_once("incl/participant.php");
$email=$_SESSION['email'];
$pe= $_SESSION['username'];
?>
<?php  if(isset($_POST['submit']))
	

										{
											$_SESSION['credit']=$_POST['credit'];
												echo $_SESSION['credit'];
											
											
											
											
											
											
											
											if($_SESSION['credit']=='500')
											{
												$_SESSION['cost']='$7';
												echo $_SESSION['cost'];
												$_SESSION['cost']=7;
											}
											
											if($_SESSION['credit']=='1000')
											{
												$_SESSION['cost']='$13';
												echo $_SESSION['cost'];												
												$_SESSION['cost']=13;
											}
											
											if($_SESSION['credit']=='3000')
											{
												$_SESSION['cost']='$19'; 
												echo $_SESSION['cost'];
												$_SESSION['cost']=19;
											}
											if($_SESSION['credit']=='5000')
											{
												$_SESSION['cost']='$32'; 
												echo $_SESSION['cost'];
												$_SESSION['cost']=32;
												
											}
										
										header('location:/pa/test.php');
										
										
										}
								else{
									echo "";
									}
							
							?>
						
						<div class="col-md-12 t">
	
				<!-----------------------------------------------------------------form body------------------------------------>
				<div style="margin-top:50px;margin-bottom:30px;">
					<TABLE CLASS="table">
							<thead><th>The Credit Cost is as follows</th></thead>
							<Tr style="background:#ffef96;color:red">
								<td>$7 - Gives you 1000Credit = TOTAL LIKES YOU WILL GET IS 500 LIKES</td>
							</Tr>
							<Tr style="background:#fec303;color:white">
								<td>$13 - Gives you 2000Credit = TOTAL LIKES YOU WILL GET IS 1000 LIKES</td>
							</Tr>
							<Tr style="background:#ffef96;color:red">
								<td>$19 - Gives you 3000Credit = TOTAL LIKES YOU WILL GET IS 3000 LIKES</td>
							</Tr>
							<Tr style="background:#fec303;color:white">
								<td>$32 - Gives you 5000Credit = TOTAL LIKES YOU WILL GET IS 5000 LIKES</td>
							</Tr>
						</TABLE>
					</div>
					<div>
					 <h5 style="font-weight:bold;font-size:1.2em;">Exchange rate:<?php
								
									$query1="select * from exchange";
									$result1=mysql_query($query1);	
									if(mysql_num_rows($result1)>0){
										$rec=mysql_fetch_array($result1);
										echo $rec['rate'];
										$conv=$rec['rate'];
									}
									else{
										
										echo "0";
									}
						
						?>
						</h5>
					</div>
					<div style="margin:0px auto;width:60%;">
					<form  class="form-horizontal" role="form">
								<fieldset>
									<legend>Buy credit</legend>
								  <div class="form-group">
											
										 <div class="" style="padding-left:50px; margin-bottom:10px;"> 
										 <input type="radio" name="credit" id="7" value="7"><span style="padding-left:10px;">$7/500 likes</span>
										</div>
										<div class="" style="padding-left:50px; margin-bottom:10px;">
										<input type="radio" name="credit" id="13" value="13"><span style="padding-left:10px;">$13/1000 likes</span>
										</div>
										<div class="" style="padding-left:50px; margin-bottom:10px;"> 
										  <input type="radio" name="credit" id="19" value="19"><span style="padding-left:10px;">$19/3000 likes</span>
										</div>
										<div class="" style="padding-left:50px;margin-bottom:10px;">
										<input type="radio" name="credit" id="32" value="32" checked><span style="padding-left:10px;">$32/5000 likes</span>
										</div>
									</div>
								  <div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
									   
										<button type="button" onclick="k1()"> Pay </button> 
									</div>
								  </div>
								</fieldset>
							</form>
					</div>
			<!---------------------------------------------------------------body ends here!---------------------------------------->
							</div>
						</div>
					</div>
				
				</div>
		</div>
			<!--FOOTER-->
		<footer>
			<?php 
			//////////////////////////////////////random string generator
			 $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
			 $string = '';
			$max = strlen($characters) - 1;
			for ($i = 0; $i < $max; $i++) {
			$string .= $characters[mt_rand(0, $max)];
			}
			$reference=$pe.$string;
			echo $reference;

				include("incl/footer.php");
				ob_end_flush();
			?>
		</footer>
	</div>
</body>
<script>
function k1(){
	var res=k();
	alert(res);
	
	
}
	  function k(){
var rates = document.getElementsByName('credit');
var rate_value;
for(var i = 0; i < rates.length; i++){
    if(rates[i].checked){
        rate_value = rates[i].value;
		return rate_value;
}}
}
</script>
</html>