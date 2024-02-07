<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Otp;
use App\Mail\OtpEmail;
use Hash;
use Mail;

class AdminController extends Controller
{
    public function adminlogin(){
        return view('auth.admin-login');
    }

    public function adminsignin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $users = User::where('email',$request->email)->first();

        if($users){
            if(Auth::attempt()){
                return $users->password;
                // $otp = rand(100000,999999);
                // $otps = new Otp;
                // $otps->user_id = $users->id;
                // $otps->otp = $otp;
                // $otps->expires_at = now()->addMinutes(10);
                // $otps->save();

                // $userS = User::where('email','=',$request->email)->first();
                // $otpS = Otp::where('user_id','=',$userS->id)->first();

                // $mailData = array(
                //     $userS->name,
                //     $userS->email,
                //     $otpS->otp,
                // );
                // $mail = Mail::to($userS->email)->send(new OtpEmail($mailData));

                // $message = "success";

                return response()->json($message);
            }else{
                $message = "Incorrect Password";
                return response()->json($message);
            }
        }else{
            $message = "Incorrect Username";
            return response()->json($message);
        }
    }
}
