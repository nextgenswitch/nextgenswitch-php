<?php 

include_once '../vendor/autoload.php';

use NextGenSwitch\Http\CurlClient;
use NextGenSwitch\VoiceResponse;




$client = new CurlClient();
$response = $client->request('get', 
'http://sg.nextgenswitch.com/api/v1/calls',[], 
[],
['X-Authorization'=>'gA2dK2rwReDyVqLltugGlZDiX5ZXJlbTzapniwk5YqvgGBh5Ua9x3gL2wuwB6out',
'X-Authorization-Secret'=>'sASbGjRm6Fg00hBCT9aAgj3ZrydN9reiqyCA4NSD0WozHRKN23Ps86E8yOHYmChN']);
if($response->ok()){
 echo "<pre>";   print_r($response->getContent()); echo "</pre>";
}else
    echo $response;


    
    // api/v1/calls?per_page=20&page=1&from_date=2023-10-23&to_date=2023-10-24