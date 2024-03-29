<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AWS;

class SMSController extends Controller
{
    protected function sendSMS($phone_number)
    {
        $sms = AWS::createClient('sns');

        $sms->publish([
            'Message' => 'Hello, This is just a test Message',
            'PhoneNumber' => $phone_number,
            'MessageAttributes' => [
                'AWS.SNS.SMS.SMSType'  => [
                    'DataType'    => 'String',
                    'StringValue' => 'Transactional',
                ]
            ],
        ]);
    }
}
