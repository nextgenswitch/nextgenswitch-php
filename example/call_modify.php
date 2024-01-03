<?php 

include_once '../vendor/autoload.php';

use NextGenSwitch\Http\CurlClient;
use NextGenSwitch\VoiceResponse;


$response = new VoiceResponse();
$response->pause(2); 
$response->say("call has been modified",['loop'=>1]); 
$response->dial("1000");
$xml = $response->xml();


$client = new CurlClient();
$response = $client->request('put', 
'http://sg.nextgenswitch.com/api/v1/call/e9361844-7f2f-4763-9808-8e2f6fff64eb',[], 
['responseXml' => $xml],
['X-Authorization'=>'RWopQ05OeelxJ6K526gPrvJCfXh5avUjJ2IuMe7tWMnmJ3fXePKiBHdsJOCqUfy8',
'X-Authorization-Secret'=>'wZHEJvcrCiFbWP1el9PuUvSa1LG02vcyI2EBxdKlWtHZlSXUIIYUyf0QKcvLUbGq']);
if($response->ok()){
 echo "<pre>";   print_r($response->getContent()); echo "</pre>";
}else
    echo $response;