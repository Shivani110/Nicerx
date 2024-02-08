<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Otp;
use App\Mail\OtpEmail;
use Hash;
use Mail;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function adminlogin(){
        return view('auth.admin-login');
    }

    public function register(){
        return view('auth.register');
    }

    public function authregister(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $password = Hash::make($request->password);

        $user = User::where('email',$request->email)->first();

        if(!$user){
            $users = new User;
            $users->name = $request->name;
            $users->email = $request->email;
            $users->password = $password;
            $users->save();

            return back()->with('success',"Registered successfully");
        }else{
            return back()->with('error','Username already exist');
        }
    }

    public function adminsignin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $users = User::where('email',$request->email)->first();

        if($users){
            if(Hash::check($request->password,$users->password)){
                $otp = rand(100000,999999);
                $otps = new Otp;
                $otps->user_id = $users->id;
                $otps->otp = $otp;
                $otps->expires_at = now()->addMinutes(10);
                $otps->save();

                $userS = User::where('email','=',$request->email)->first();
                $otpS = Otp::where('user_id','=',$userS->id)->first();

                $mailData = array(
                    $userS->name,
                    $userS->email,
                    $otpS->otp,
                );
                $mail = Mail::to($userS->email)->send(new OtpEmail($mailData));

                $message = "success";

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
    
    public function verifyOtp(Request $request){
        $username = $request->username;
        $password = $request->pass;
        $otp = $request->otp;

        $verfiyCode = Otp::where('otp','=',$otp)->first();

        if($verfiyCode){
            $expiretime = $verfiyCode->expires_at;
            $currenttime = Carbon::now();
            $curt_time = $currenttime->toDateTimeString();

            if($expiretime > $curt_time){
                if(Auth::attempt(['email'=>$username,'password'=>$password])){
                    if(Auth::user()->is_admin == 1){
                        $otp = Otp::where('user_id',Auth::user()->id)->delete();
                        return redirect('/admin/index');
                    }else{
                        return redirect('/');
                    }
                }else{
                    return redirect('/');
                }
            }else{
                return redirect('/');
            }
        }else{
            return redirect('/')->with("error",'Incorrect OTP');
        }
    }

    public function resendotp(Request $request){
        $email = $request->username;
        $password = $request->password;

        $users = User::where('email','=',$email)->first();

        if($users){
            if(Hash::check($password,$users->password)){
                $otp = rand(100000,999999);
                $otps = new Otp;
                $otps->user_id = $users->id;
                $otps->otp = $otp;
                $otps->expires_at = now()->addMinutes(10);
                $otps->save();

                $userS = User::where('email','=',$email)->first();
                $otpS = Otp::where('user_id','=',$userS->id)->first();

                $mailData = array(
                    $userS->name,
                    $userS->email,
                    $otpS->otp,
                );
                $mail = Mail::to($userS->email)->send(new OtpEmail($mailData));

                $message = "success";

                return response()->json($message);
            }
        }
    }

    public function authlogout(){
        Auth::logout();

        return redirect('/');
    }
}
