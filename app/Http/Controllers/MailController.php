<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Routing\Redirector;
use App\Mail\BasicMail;
use GuzzleHttp\Client;

class MailController extends Controller
{
    public function emailCreate()
    {
        return view('emails.create');
    }

    public function sendMail(Request $request)
    {
        try {
            // get request body
            $body = $request->all();

            // get env variables
            $mailgunEndpoint = env('MAILGUN_ENDPOINT');
            $mailgunDomain = env('MAILGUN_DOMAIN');
            $mailgunApiKey = env('MAILGUN_SECRET');

            // replace mailgun domain
            $url = str_replace('<DOMAIN>', $mailgunDomain, $mailgunEndpoint);

            // send email thru API call
            $client = new Client();
            $res = $client->request('POST', $url, [
                'auth' => ['api', $mailgunApiKey],
                'form_params' => [
                    'from' => $body['email_from'],
                    'to' => $body['email_to'],
                    'subject' => $body['subject'],
                    'text' => $body['message'],
                ]
            ]);

            return redirect('/email/sent');

        } catch(\Exception $e) {
            return "Cannot send email";
        }
    }

    public function emailSent()
    {
        return view('emails.sent');
    }
}
