
<?php


$body ="<?xml version=\"1.0\" encoding=\"UTF-8\"?>
				<SOAP-ENV:Envelope
            xmlns:SOAP-ENV=\"http://schemas.xmlsoap.org/soap/envelope/\">
            <SOAP-ENV:Header />
            <SOAP-ENV:Body>
                        <ns4:IPGApiActionRequest
                                    xmlns:ns4=\"http://ipg-online.com/ipgapi/schemas/ipgapi\"
                                    xmlns:ns2=\"http://ipg-online.com/ipgapi/schemas/a1\"
                                    xmlns:ns3=\"http://ipg-online.com/ipgapi/schemas/v1\">
                                    <ns2:Action>
                                                <ns2:InquiryOrder>
                                                            <ns2:StoreId>3344006441</ns2:StoreId>
                                                            <ns2:OrderId>A-17b89dc3-c5ae-45e0-9b87-04f992238678</ns2:OrderId>
                                                </ns2:InquiryOrder>
                                    </ns2:Action>
                        </ns4:IPGApiActionRequest>
            </SOAP-ENV:Body>
</SOAP-ENV:Envelope>";  
	
	
	


// initializing cURL with the IPG API URL:
$ch = curl_init("https://test.ipg-online.com/ipgapi/services");
//curl_setopt($ch, CURLOPT_PROXY, 'proxy:8080'); //Proxy if required
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'Username:Password');

//echo $ch;
// setting the request type to POST:
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



