<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Mail;

class MailController extends Controller
{
    // メール送信処理
    public function send(Request $request){

        //バリデーション
        $validator = $request->validate([
            'name' => 'required|max:100', 
            'email' => 'required|max:100', 
            'subject' => 'required|max:100', 
            'text' => 'required|max:1000', 
        ]);

        $name = $request->name;
        $email = $request->email;
        $text = $request->text;
        $subject = $request->subject;

        // メール送信処理（//view/emails/test_mail_text.blade.phpにデータを送る）
        Mail::send(['text' => 'emails.mail_text'], [
            'text'=>$text , //送りたい情報
            'name'=>$name,
            'email'=>$email,
            'subject'=>$subject,
            
        ]
        , function($message) use($email) {
            
            $message
                ->from('karen.suzuki.hairmake@gmail.com')
                ->to($email)
                ->subject("お問い合わせありがとうございます。");
        });

        // メール送信処理（//view/emails/test_mail_text.blade.phpにデータを送る）
        Mail::send(['text' => 'emails.self_mail_text'], [
            'text'=>$text , //送りたい情報
            'name'=>$name,
            'email'=>$email,
            'subject'=>$subject,
        ]
        , function($message) use($email) {
            
            $message
                ->from($email)
                ->to('karen.suzuki.hairmake@gmail.com')
                ->subject("お問い合わせがありました。");
        });

        return redirect('contacted');
        // return view('contact', ['sended' => true]);
    }

}
