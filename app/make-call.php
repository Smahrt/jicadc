<?php
require_once "../vendor/autoload.php";
    use Twilio\Rest\Client;
    
    //$AccountSid = "AC635fe259ccfa0983ef7c87c292b2ebec";
    $AccountSid = "ACbbb2bdc97932964b709697702be99690";
    //$AuthToken = "b4de3a5516096334a27c1fb3e1815dbd";
    $AuthToken = "ee536c11385b0bd9864687b90f49cd41";

    $client = new Client($AccountSid, $AuthToken);
    $fromNumber = "+18304693282";

    if(isset($_POST['submit'])){
        //$toNumber = $_POST['toContact'];
        $toNumber = "+2348137809477";
        try {
            // Initiate a new outbound call
            $call = $client->account->calls->create(
                $toNumber,
                $fromNumber,
                array("url" => "http://demo.twilio.com/docs/voice.xml")
            );
            $success = "Started call: " . $call->to;
        } catch (Exception $e) {
            $error = "Error: " . $e->getMessage();
        }
    }

?>