
<?php

$body ="<?xml version=\"1.0\" encoding=\"UTF-8\"?>
				<SOAP-ENV:Envelope xmlns:SOAP-ENV=\"http://schemas.xmlsoap.org/soap/envelope/\">
				<SOAP-ENV:Header/>
				<SOAP-ENV:Body><ipgapi:IPGApiOrderRequest xmlns:v1=\"http://ipg-online.com/ipgapi/schemas/v1\" xmlns:ipgapi=\"http://ipg-online.com/ipgapi/schemas/ipgapi\">
				<v1:Transaction>
					<v1:CreditCardTxType>
					    <v1:StoreId>3344006441</v1:StoreId> 
						<v1:Type>return</v1:Type>
					</v1:CreditCardTxType>
					<v1:Payment>
						<v1:ChargeTotal>1</v1:ChargeTotal>
						<v1:Currency>356</v1:Currency>
					</v1:Payment>
					<v1:TransactionDetails>
						<v1:OrderId>A-17b89dc3-c5ae-45e0-9b87-04f992238678</v1:OrderId>
					</v1:TransactionDetails>
				</v1:Transaction>
				</ipgapi:IPGApiOrderRequest>
				</SOAP-ENV:Body>
				</SOAP-ENV:Envelope>";

// initializing cURL with the IPG API URL:
$ch = curl_init("https://test.ipg-online.com/ipgapi/services");
//curl_setopt($ch, CURLOPT_PROXY, 'proxy:8080'); //Proxy if required
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'Username:Password');

//echo $ch;
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: text/xml"));
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "WS3344006441._.1:Test@123");
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSLCERT, "cert/WS3344006441._.1.pem");
curl_setopt($ch, CURLOPT_SSLKEY, "cert/WS3344006441._.1.key");
curl_setopt($ch, CURLOPT_SSLKEYPASSWD, "Test@123");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$output = curl_exec($ch);
$clean_xml = str_ireplace(['SOAP-ENV:', 'ipgapi:'], '', $output);
$xml = simplexml_load_string($clean_xml);
echo "<pre>";
print_r($xml);
curl_close($ch);
?>
