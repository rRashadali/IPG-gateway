<?php 
echo "<pre>";
print_r($_POST);die;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" >
		<title>Success page</title>
	</head>
	
	<body>
		<h1>
			<font color="green">Your Transaction finished successfully</font>
		</h1>
		<p>
			<b>Here are the confirmation fields:</b>
		</p>
	
		<table>
		
			
			
			
			<tr>
							<td>endpointTransactionId</td>
							<td>
								<input id="endpointTransactionId" name="endpointTransactionId" class="x25" size="40" type="text" value="<?php echo $_POST['endpointTransactionId']; ?>">
							</td>
						</tr>
			
			
			
			<tr>
							<td>approval_code</td>
							<td>
								<input id="approval_code" name="approval_code" class="x25" size="40" type="text" value=<?php echo $_POST['approval_code']; ?>">
							</td>
						</tr>
			
			
			

						
					
						<tr>
							<td>terminal_id</td>
							<td>
								<input id="terminal_id" name="terminal_id" class="x25" size="40" type="text" value=
								"<?php echo $_POST['terminal_id']; ?>">
							</td>
						</tr>
					
						<tr>
							<td>ipgTransactionId</td>
							<td>
								<input id="ipgTransactionId" name="ipgTransactionId" class="x25" size="40" type="text" value="<?php echo $_POST['ipgTransactionId']; ?>">
							</td>
						</tr>
					
						
					
						<tr>
							<td>currency</td>
							<td>
								<input id="currency" name="currency" class="x25" size="40" type="text" value="<?php echo $_POST['currency']; ?>">
							</td>
						</tr>
					
						
					
						<tr>
							<td>chargetotal</td>
							<td>
								<input id="chargetotal" name="chargetotal" class="x25" size="40" type="text" value="<?php echo $_POST['chargetotal']; ?>">
							</td>
						</tr>
					
						<tr>
							<td>timezone</td>
							<td>
								<input id="timezone" name="timezone" class="x25" size="40" type="text" value="<?php echo $_POST['timezone']; ?>">
							</td>
						</tr>
					
						<tr>
							<td>cccountry</td>
							<td>
								<input id="cccountry" name="cccountry" class="x25" size="40" type="text" value="<?php echo $_POST['cccountry']; ?>">
							</td>
						</tr>
					
						<tr>
							<td>oid</td>
							<td>
								<input id="oid" name="oid" class="x25" size="40" type="text" value="<?php echo $_POST['oid']; ?>">
							</td>
						</tr>
					
						<tr>
							<td>ccbin</td>
							<td>
								<input id="ccbin" name="ccbin" class="x25" size="40" type="text" value="<?php echo $_POST['ccbin']; ?>">
							</td>
						</tr>
					
						<tr>
							<td>tdate</td>
							<td>
								<input id="tdate" name="tdate" class="x25" size="40" type="text" value="<?php echo $_POST['tdate']; ?>">
							</td>
						</tr>
					
						<tr>
							<td>response_hash</td>
							<td>
								<input id="response_hash" name="response_hash" class="x25" size="40" type="text" value="<?php echo $_POST['response_hash']; ?>">
							</td>
						</tr>
					
					
						<tr>
							<td>txndatetime</td>
							<td>
								<input id="txndatetime" name="txndatetime" class="x25" size="40" type="text" value="<?php echo $_POST['txndatetime']; ?>">
							</td>
						</tr>
					
						<tr>
							<td>status</td>
							<td>
								<input id="status" name="status" class="x25" size="40" type="text" value="<?php echo $_POST['status']; ?>">
							</td>
						</tr>
					
						<tr>
							<td>cardnumber</td>
							<td>
								<input id="cardnumber" name="cardnumber" class="x25" size="40" type="text" value="<?php echo $_POST['cardnumber']; ?>">
							</td>
						</tr>
					
						<tr>
							<td>processor_response_code</td>
							<td>
								<input id="processor_response_code" name="processor_response_code" class="x25" size="40" type="text" value="<?php echo $_POST['processor_response_code']; ?>">
							</td>
						</tr>
					
					
					<tr>
							<td>expmonth</td>
							<td>
								<input id="expmonth" name="expmonth" class="x25" size="40" type="text" value="<?php echo $_POST['expmonth']; ?>">
							</td>
						</tr>
						
						<tr>
							<td>expyear</td>
							<td>
								<input id="expyear" name="expyear" class="x25" size="40" type="text" value="<?php echo $_POST['expyear']; ?>">
							</td>
						</tr>
					
						<tr>
							<td>ccbrand</td>
							<td>
								<input id="ccbrand" name="ccbrand" class="x25" size="40" type="text" value="<?php echo $_POST['ccbrand']; ?>">
							</td>
						</tr>
					
						<tr>
							<td>txntype</td>
							<td>
								<input id="txntype" name="txntype" class="x25" size="40" type="text" value="<?php echo $_POST['txntype']; ?>">
							</td>
						</tr>
					
						<tr>
							<td>submitBtn</td>
							<td>
								<input id="submitBtn" name="submitBtn" class="x25" size="40" type="text" value="Submit This Form">
							</td>
						</tr>
					
						<tr>
							<td>txndate_processed</td>
							<td>
								<input id="txndate_processed" name="txndate_processed" class="x25" size="40" type="text" value="<?php echo $_POST['txndate_processed']; ?>">
							</td>
						</tr>
					
						<tr>
							<td>paymentMethod</td>
							<td>
								<input id="paymentMethod" name="paymentMethod" class="x25" size="40" type="text" value="<?php echo $_POST['paymentMethod']; ?>">
							</td>
						</tr>
					
			<tr>
				<td>response_hash_validation</td>
				<td>
					<input id="response_hash_validation" name="response_hash_validation" class="x25" size="40" type="text" value=false>
				</td>
			</tr>
			<tr>
				<td>responseHash_validationFrom</td>
				<td>
					<input id="responseHash_validationFrom" name="responseHash_validationFrom" class="x25" size="40" type="text" value=null+null+null+null+Y:015185:0015938819:PPX :083109105039+100.00+356+null+null>
				</td>
			</tr>
		</table>
	</body>
</html>