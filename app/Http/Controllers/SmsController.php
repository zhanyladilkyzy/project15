<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Nexmo\Laravel\Facade\Nexmo;
use Session;

class SmsController extends Controller
{
    public function index(){
      return view('/sms');
    }

    public function sendSms(Request $request){
      Nexmo::message()->send([
    'to'   => $request->mobile,
    'from' => "Vonage SMS API",
    'text' => 'You added your order successfully!'
      ]);

      Session::flash('success', 'SMS sent successfully');
      return redirect('/');
    }
}
