<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail() {
        $details = [
            'title'=>'Mail from Le Nguyen Quyen Trang.',
            'body'=>'This is testing mail using Gmail.'
        ];

        Mail::to("lnqtrang0309@gmail.com")->send(new TestMail($details));
        return "Mail sent.";
    }
}
