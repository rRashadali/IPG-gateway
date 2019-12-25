
<?php

$body ="<?xml version=\"1.0\" encoding=\"UTF-8\"?>
				<SOAP-ENV:Envelope xmlns:SOAP-ENV=\"http://schemas.xmlsoap.org/soap/envelope/\">
				<SOAP-ENV:Header/>
				<SOAP-ENV:Body>

<ns4:IPGApiActionRequest
xmlns:ns4=\"http://ipg-online.com/ipgapi/schemas/ipgapi\"
xmlns:ns2=\"http://ipg-online.com/ipgapi/schemas/v1\" 
xmlns:ns3=\"http://ipg-online.com/ipgapi/schemas/a1\">
	<ns3:Action>
			<ns3:StoreHostedData>
					<ns3:DataStorageItem>
						<ns3:Function>delete</ns3:Function>
						<ns3:HostedDataID>4E2E6693-852D-467B-B50B-BBCE76E64EA6</ns3:HostedDataID>
					</ns3:DataStorageItem>
			</ns3:StoreHostedData>
	</ns3:Action>
</ns4:IPGApiActionRequest>
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
