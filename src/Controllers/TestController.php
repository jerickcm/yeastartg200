<?php

namespace Jerickcm\Yeastartg200\Controllers;

use Illuminate\Http\Request;
use Jerickcm\Yeastartg200\Models\Mobilephone;

class TestController
{
    public function create()
    {
        dd("hello test run");
    }

    public function sending(Request $request)
    {
        $data = [
            'title' => $request['title'],
            'message' => $request['message'],
            'contact_number' => $request['contact_number']
        ];

        $return = $this->multiple_sms_module($data);

        return response()->json([
            'sent' => $return,
            'success' => true,
        ]);
    }

    public function multiple_sms_module($data)
    {

        $debug = 'on';
        $SMS_gateway_account = 'apiuser';
        // $SMS_gateway_password = 'apipass';
        $SMS_gateway_password = 'apipass';
        $SMS_gateway = '192.168.5.150';
        $SMS_source = '09776229501'; // sender SIM
        $SMS_destination = $data['contact_number'];
        $channel = '1'; // 1 or 2 sim channe 1 and 2 for Yeastar TG200
        $mobilecompany = $this->mobilecompany($SMS_destination);

        if ($mobilecompany == "smart") {
            $channel = '2'; //Smart channel
        } else {
            $channel = '1'; //Globe channel
        }

        $message = $data['message'];
        $SMS_message = $message;

        $ch = curl_init();
        $SMS_gateway_password_encoded = curl_escape($ch, $SMS_gateway_password);
        $SMS_message_encoded = curl_escape($ch, $SMS_message);
        $transmission = "http://" . $SMS_gateway . "/cgi/WebCGI?1500101=account=" . $SMS_gateway_account . "&password=" . $SMS_gateway_password_encoded . "&port=" . $channel . "&destination=" . $SMS_destination . "&content=" . $SMS_message_encoded;
        curl_setopt($ch, CURLOPT_URL, $transmission);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $SMS_result = curl_exec($ch);

        if ((strpos($SMS_result, 'Response: Success') !== false) && ((strpos($SMS_result, 'Message: Commit successfully!') !== false))) {
            $SMS_success = 'YES';
        } else {
            $SMS_success = 'NO';
        }

        curl_close($ch);

        if ($SMS_success == 'YES') {
            return true;
            // echo '<h1 align="center">SMS SENT</h1>';
        } else {
            return false;
            // echo '<h1 align="center">SMS FAIL</h1>';
        }
    }

    public function mobilecompany($mobile_number)
    {
        $string  = $mobile_number;
        $result = substr($string, -10, -7);
        $threedigitidentifier =  $result;
        return $this->phonenumber_list($threedigitidentifier);
    }

    public function phonenumber_list($identifierdigit)
    {

        $smart = Mobilephone::select('areacode')->where('telco', 'smart')->get()->pluck('areacode')->toArray();
        $globe = Mobilephone::select('areacode')->where('telco', 'globe')->get()->pluck('areacode')->toArray();
        $ditto = Mobilephone::select('areacode')->where('telco', 'ditto')->get()->pluck('areacode')->toArray();
        $sun = Mobilephone::select('areacode')->where('telco', 'sun')->get()->pluck('areacode')->toArray();

        if (in_array($identifierdigit, $smart)) {
            return  "smart";
        } else if (in_array($identifierdigit, $globe)) {
            return "globe";
        } else if (in_array($identifierdigit,  $ditto)) {
            return "ditto";
        } else if (in_array($identifierdigit,  $sun)) {
            return "sun";
        } else {
            return "others";
        }
    }
}
