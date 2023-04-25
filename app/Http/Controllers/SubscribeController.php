<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function add()
        {
            // require_once('/path/to/MailchimpMarketing/vendor/autoload.php');
            $mailchimp = new \MailchimpMarketing\ApiClient();

            $mailchimp->setConfig([
                'apiKey' => config('services.mailchipm.key'),
                'server' => 'us13'
            ]);

            try{
                // $response = $mailchimp->lists->getAllLists();
                $response = $mailchimp->lists->addListMember("3937772f78", [
                    "email_address" => request()->email,
                    "status" => "subscribed",
                ]);
                
                return redirect('/')->with('success','Signed up for Newsletter');

            }catch(\Exception $e)
            {
                throw \Illuminate\Validation\ValidationException::withMessages([
                    'email' => 'This email address not added to newsletter'
                ]);
            }
        }
    
}
