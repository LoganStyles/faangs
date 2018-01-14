						<?php
				$query1="select * from contest where status='active'limit 1";
											$result1=mysql_query($query1);
					if(mysql_num_rows($result1)>0)
					{
						$rec=mysql_fetch_array($result1);
						$state=$rec['state'];
						$contestname=$rec['contestname'];
						$startdate=$rec['startdate'];
						$enddate=$rec['enddate'];
						if($state=='on'){
							$state=1;
						}
						else{
							$state=2;
						}
							//echo $enddate."</br>";	
							?>	
						<p id="demo"></p>
						<script>
										var a="<?php echo $enddate?>";
										var b="<?php echo $state?>";
										var countDownDate = new Date(a ).getTime();
										var x = setInterval(function() {
										  var now = new Date().getTime();
										  var distance = countDownDate - now;
										  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
										  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
										  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
										  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
										  if(b==1){
										  document.getElementById("demo").innerHTML =" "+ days + " Days " + hours + " Hrs "
										  + minutes + " Mins " + seconds + " Sec ";
										  }
										  if (distance < 0) {
											clearInterval(x);
											document.getElementById("demo").innerHTML = "EXPIRED";
										  }
										}, 1000);
							</script>
						
					<?php	
					}
					else{
						echo "	NO ACTIVE CONTEST";
					}
						?>