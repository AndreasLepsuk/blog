<?php

namespace App\Http\Controllers;

use App\Services\MailchimpNewsletter;
use Illuminate\Validation\ValidationException;
use Exception;

class NewsletterController extends Controller
{
    public function __invoke(MailchimpNewsletter $newsletter)
    {
        request()->validate(['email' => 'required|email']);

        try {
            $newsletter->subscribe(request('email'));
        } catch (Exception $e) {
            throw ValidationException::withMessages([
                'email'=> 'This email could not be added to our newletter list.',
            ]);
        }
        
        return redirect('/')
            ->with('success','You are now signed up for our newsletter!');
    }
}
