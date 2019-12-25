<?php 

$body ="<SOAP-ENV:Envelope xmlns:SOAP-ENV=\"http://schemas.xmlsoap.org/soap/envelope/\">
<SOAP-ENV:Header/>
                    <SOAP-ENV:Body>
         <ns5:IPGApiActionRequest
						xmlns:ns5=\"http://ipg-online.com/ipgapi/schemas/ipgapi\"
						xmlns:ns2=\"http://ipg-online.com/ipgapi/schemas/a1\"
						xmlns:ns3=\"http://ipg-online.com/ipgapi/schemas/v1\">
            <ns2:Action>
                <ns2:CreatePaymentURL>
                    <ns2:Transaction>
                        <ns3:PaymentUrlTxType>
                            <ns3:StoreId>3344006441</ns3:StoreId>
                            <ns3:Type>sale</ns3:Type>
                        </ns3:PaymentUrlTxType>
                        <ns3:Payment>
                            <ns3:ChargeTotal>100</ns3:ChargeTotal>
                            <ns3:Currency>356</ns3:Currency>
                        </ns3:Payment>
                        <ns3:TransactionDetails/>
                        <ns3:ClientLocale>
                            <ns3:Language>en</ns3:Language>
                            <ns3:Country>IN</ns3:Country>
                        </ns3:ClientLocale>
                    </ns2:Transaction>
                </ns2:CreatePaymentURL>
            </ns2:Action>
        </ns5:IPGApiActionRequest>
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
