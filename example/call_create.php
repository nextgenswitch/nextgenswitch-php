<?php 

include_once '../vendor/autoload.php';

use NextGenSwitch\Http\CurlClient;
use NextGenSwitch\VoiceResponse;


$response = new VoiceResponse();
$response->pause(2); 
$response->say("please wait while we are dialing the call, we are dialing now",['loop'=>4]); 
$response->dial("1001");
$xml = $response->xml();


$client = new CurlClient();
$response = $client->request('post', 
'http://sg.nextgenswitch.com/api/v1/call',[], 
['to' => '1000', 'from' => '01518307641', 'responseXml' => $xml],
['X-Authorization'=>'RWopQ05OeelxJ6K526gPrvJCfXh5avUjJ2IuMe7tWMnmJ3fXePKiBHdsJOCqUfy8',
'X-Authorization-Secret'=>'wZHEJvcrCiFbWP1el9PuUvSa1LG02vcyI2EBxdKlWtHZlSXUIIYUyf0QKcvLUbGq']);
if($response->ok()){
 echo "<pre>";   print_r($response->getContent()); echo "</pre>";
}else
    echo $response;