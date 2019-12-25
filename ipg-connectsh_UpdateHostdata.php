<?php include("ipg-util_PIV.php"); ?>




<html>
	<head>
		<title>IPG Connect Sample for PHP(hashing)</title>
	</head>
	<body>
		<p>
		<h1>
			Order Form
		</h1>
		<?php 
		$responseSuccessURL = "http://localhost/IPG-New/response_success.php";
		$responseFailURL = "http://localhost/IPG-New/response_fail.php";
		
		?>

			<form method="post"	action="https://test.ipg-online.com/connect/gateway/processing">
				

			<input type="hidden" name="timezone" value="IST" />
			<input type="hidden" name="authenticateTransaction" value="false" />

			<table>
				
				<tr>
					<td>
						Transaction Type
					</td>
					<td>
						<input size="50" type="text" name="txntype" value="sale"/> <!--Preauth,payer_auth)-->
					</td>
				</tr>
				<tr>
					<td>
						Transaction Date Time
					</td>
					<td>
						<input size="50" type="text" name="txndatetime" value="<?php echo getDateTime(); ?>" />
					</td>
				</tr>
				<tr>
					<td>
						Calculated HASH
					</td>
					<td>
						<input size="50" type="text" name="hash" value="<?php echo createHash("0","356"); ?>"/>
					</td>
				</tr>
				<tr>
					<td>
						Currency
					</td>
					<td>
						<input size="50" type="text" name="currency" value="356" />

					</td>
				</tr>
				<tr>
					<td>
						Payment Mode
					</td>
					<td>
						<input size="50" type="text" name="mode" value="payonly" />
					</td>
				</tr>
							
				<tr>
					<td>
						Store Id
					</td>
					<td>
						<!--<input size="50" type="text" name="storename" value="3387025941" />-->
						<input size="50" type="text" name="storename" value="3344006441" />
					</td>
				</tr>				
				<tr>
					<td>
						Chargetotal
					</td>
					<td>
						<input size="50" type="text" name="chargetotal" value="0" />
					</td>
				</tr>
				<tr>
				<!--  if You want Gateway to create Assign token use the assignToken to true -->
				<td> Assign Token </td>
				<td>
					<input type="text" readonly="readonly" name="assignToken" value="false" /> 
				</td>
				</tr>
				<tr>
					<td>
						hosteddataid
					</td>
					<td>
						<input size="50" type="text" name="hosteddataid" value="4E2E6693-852D-467B-B50B-BBCE76E64EA6" />
					</td>
				</tr>
				<!--<tr>
					<td>
						multipay
					</td>
					<td>
						<input size="50" type="text" name="multipay" value="multipay" />
					</td>
				</tr> -->
				<tr>
					<td>
						full_bypass
					</td>
					<td>
						<input id="" name="full_bypass" size="20" value="false" type="text">
					</td>
				</tr>
				<!--<tr> For Full bypass -->
				<!--<tr>
					<td>
						oid
					</td>
					<td>
						<input size="50" type="text" name="oid" value="20190910MRA77" />
					</td>
				</tr> 
				<tr>
					<td>
						CardholderName
					</td>
					<td>
						<input size="50" type="text" name="CardholderName" value="Manojh" />
					</td>
				</tr>
				<tr>
					<td>
						bname
					</td>
					<td>
						<input size="50" type="text" name="bname" value="ABC LTD" />
					</td>
				</tr>
				<tr>
					<td>
						cardnumber
					</td>
					<td>
						<input size="50" type="text" name="cardnumber" value="6074829900004938" />
					</td>
				</tr> 
				<tr>
					<td>
						expmonth
					</td>
					<td>
						<input size="50" type="text" name="expmonth" value="12" />
					</td>
				</tr> 
				<tr>
					<td>
						expyear
					</td>
					<td>
						<input size="50" type="text" name="expyear" value="2024" />
					</td>
				</tr> 
				<tr>
					<td>
						cvm
					</td>
					<td>
						<input size="50" type="text" name="cvm" value="123" />
					</td>
				</tr> -->
				<!--<tr> For Full bypass -->
				<tr>
					<td>
						Shared Secret
					</td>
					<td>
						<!--<input size="50" type="text" name="sharedsecret" value="PZ6Jnz9r9M" />-->
						<input size="50" type="text" name="sharedsecret" value="Rn2gF9wsbk"/>
					</td>
					
				</tr>
								<tr>
							<td>email</td>
							<td>
								<input id="email" name="email" class="x25" size="40" type="text" value="ajeetpal@avis.co.in">
							</td>
						</tr>

				</tr>
			
					<td>
						Language
					</td>
					<td>
						<select name="language">
							<option value="de_DE">Deutsch</option>
							<option value="en_EN" selected>English</option>
						</select>
					</td>
				</tr>
					
				<input type="hidden" name="responseSuccessURL" value="<?php echo $responseSuccessURL ?>"/>
			
			    <input type="hidden" name="responseFailURL" value="<?php echo $responseFailURL ?>"/>
				
			
			
				<tr>
					<td colspan="2" align="center"><input type="submit" name ="submitBtn" value="Submit This Form"></td>
				</tr>
				<input type="hidden" name="hash_algorithm" value="SHA1"/>
		</table>
		</form>

	</body>
</html>
