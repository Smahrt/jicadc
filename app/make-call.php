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


<div class="card">
    <div class="card-header" data-background-color="orange">
        <h4 class="title">Make a Call</h4>
        <p class="category">Start a new survey by calling a contact or selecting a contact group</p>
    </div>

    <div class="card-content">
        <form action="home.php" method="post">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <div class="form-group label-floating">
                        <label class="control-label">Select Contact</label>
                        <select id="contacts" name="toContact" class="form-control">
                            <option>Select Contact</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-1">
                    <p>OR</p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group label-floating">
                        <label class="control-label">Select Contact Group</label>
                        <select id="contact-group" disabled class="form-control">
                            <option>Select Contact Group</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group label-floating">
                        <label class="control-label">Select Survey</label>
                        <select class="form-control">
                        </select>
                    </div>
                </div>
            </div>

            <button type="submit" name="submit" value="submit" class="btn btn-warning pull-right">Start Survey</button>
            <div class="clearfix"></div>
        </form>
    </div>
</div>