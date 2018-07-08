<!doctype html>
	<html>
		<head>
		 <style>
		  body{
			 font-family: Calibri;
		  }
		  .button {
					background-color:#00008B;
					border: none;
					color: white;
					padding: 15px 32px;
					text-align: center;
					text-decoration: none;
					display: inline-block;
					font-size: 16px;
				}
				</style>
			<title>Output</title>
			
				</head>
					<body>
					  <hr/>
					  <h3 >Character Frequency Counter</h3><hr/>
					  <form align="center" action="index.php" method="POST">
					      <table align="center">
							<tr>
								<th>Character</th>
								<th>Count</th>
							</tr>
								<?php 
										//char count
						     			$str="";
										if ($_SERVER["REQUEST_METHOD"] == "POST") {
								  
											$str = $_POST["text"];
											$strArray = count_chars($str,1);
											foreach ($strArray as $key=>$value)
											 {
												echo "<tr>";
												echo "<td>";
												echo chr($key);
												echo "</td>";
												echo "<td>";
												echo $value;
												echo "</td>";
												echo "</tr>"; 
											 }											
										  }
									?>
										
											</table>
											<br><br><br>
											<button class="button"type="submit" >Input Another String</button><br><br><br><br><br><br><br><br>

											<table align="center">
												<tr>
													<th>Word</th>
													<th>Count</th>
												</tr>
									<?php
									
										$input=$_POST['text'];
										$length=strlen($input);
										$arr=array_count_values(str_word_count($input, 1));
										ksort($arr);
										foreach($arr as $word=>$count)
										{
											echo "<tr>";
											echo "<td>";
											echo $word;
											echo "</td>";
											echo "<td>";
											echo $count;
											echo "</td>";
											echo "</tr>"; 
										}
									?>
									
											</table>
											<br><br><br>
											<button class="button" type="submit">Input Another String</button><br><br><br>
										</form>
									</body>
									</html>
									
					  
					

								

