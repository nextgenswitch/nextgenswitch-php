<?php 

include_once '../vendor/autoload.php';

use NextGenSwitch\Http\CurlClient;
use NextGenSwitch\VoiceResponse;


$response = new VoiceResponse();
$response->pause(2); 
$response->say("please wait while we are dialing",['loop'=>1]); 
$response->dial("1000");
$xml = $response->xml();




$client = new CurlClient();
print_r($client->request('post', 
'http://sg.nextgenswitch.com/api/v1/call/create',[], 
['to' => '1001', 'from' => '01518307641', 'responseXml' => $xml],
['X-Authorization'=>'3NF3va7CjyycOis6hwmkF08oAcE8h5tKIzB4mlVzvGS720oKdnvo5C6PxLuUBkci'])->getContent());