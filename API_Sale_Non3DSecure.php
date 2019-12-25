<?php


$body ="<?xml version=\"1.0\" encoding=\"UTF-8\"?><SOAP-ENV:Envelope xmlns:SOAP-ENV=\"http://schemas.xmlsoap.org/soap/envelope/\">
    <SOAP-ENV:Header/>
    <SOAP-ENV:Body>
        <ns5:IPGApiOrderRequest xmlns:ns5=\"http://ipg-online.com/ipgapi/schemas/ipgapi\" xmlns:v1=\"http://ipg-online.com/ipgapi/schemas/v1\" xmlns:ns3=\"http://ipg-online.com/ipgapi/schemas/a1\" xmlns:ns4=\"http://api.clickandbuy.com/webservices/pay_1_0_0/\">
           <v1:Transaction>
                <v1:CreditCardTxType>
				    <v1:StoreId>3344006441</v1:StoreId>
                    <v1:Type>sale</v1:Type>
                </v1:CreditCardTxType>
                <v1:CreditCardData>
                    <v1:CardCodeValue>977</v1:CardCodeValue>
                </v1:CreditCardData>
                <v1:Payment>
                    <v1:HostedDataID>4E2E6693-852D-467B-B50B-BBCE76E64EA6</v1:HostedDataID>
                    <v1:ChargeTotal>2000.00</v1:ChargeTotal>
                    <v1:Currency>356</v1:Currency>
                </v1:Payment>
            </v1:Transaction>				
            </ns5:IPGApiOrderRequest>
    </SOAP-ENV:Body></SOAP-ENV:Envelope>";
	
	// initializing cURL with the IPG API URL:
$ch = curl_init("https://test.ipg-online.com/ipgapi/services");
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
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
print_r(curl_error($ch));
 $clean_xml = str_ireplace(['SOAP-ENV:', 'ipgapi:'], '', $output);
 $xml = simplexml_load_string($clean_xml);
 echo "<pre>";
 print_r($xml);
curl_close($ch);

?>
