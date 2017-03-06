<?php
require_once "../vendor/autoload.php";
    use Twilio\Rest\Client;
    
    $AccountSid = "AC635fe259ccfa0983ef7c87c292b2ebec";
    $AuthToken = "b4de3a5516096334a27c1fb3e1815dbd";

    // Step 3: Instantiate a new Twilio Rest Client
    $client = new Client($AccountSid, $AuthToken);
    $fromNumber = "+2348137809477";

    if(isset($POST_['submit'])){
        //$toNumber = $_POST['toContact'];
        $toNumber = "+2348137809477";
        try {
            // Initiate a new outbound call
            $call = $client->account->calls->create(
                $fromNumber,
                $toNumber,
                // Step 6: Set the URL Twilio will request when the call is answered.
                array("url" => "http://c3829e6e.ngrok.io/voice/connect")
            );
            $sucess = "Started call: " . $call->sid;
            echo "Hello";
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

?>