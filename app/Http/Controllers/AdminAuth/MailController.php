<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function sendEmailToMe(Request $request)
    {
        try {
            Mail::send('email', ['name' => $request->name, 'text' => $request->text, 'mail' => $request->mail], function ($message) use ($request) {
                $message->subject('Email from '.$request->name);
                $message->from('noreply@ok-food.com', 'OK-FOOD');
                $message->to('winnerawan@icloud.com');
            });

            return redirect()->route('/');
        } catch (Exception $e) {
            return redirect()->route('/');
        }
    }

    public function sendEmailToMerchant(Request $request)
    {
        try {
            Mail::send('email', ['name' => $request->name, 'text' => $request->text, 'email' => $request->email, 'subject' => $request->subject], function ($message) use ($request) {
                $message->subject($request->subject);
                $message->from('noreply@ok-food.com', 'OK-FOOD');
                $message->to($request->email);
            });

            return redirect()->route('/');
        } catch (Exception $ex) {
            return redirect()->route('/');
        }
    }
}
