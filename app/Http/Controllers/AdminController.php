<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\ExcludeState;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function excludestate(){
        $statearray = array("Alaska"=>"ak","Alabama"=>"al","Arkansas"=>"ar","Arizona"=>"az","California"=>"ca","Colorado"=>"co","Connecticut"=>"ct","District Of Columbia"=>"dc","Delaware"=>"de","Florida"=>"fl","Georgia"=>"ga","Hawaii"=>"hi","Iowa"=>"ia","Idaho"=>"id","Illinois"=>"il","Indiana"=>"in","Kansas"=>"ks","Kentucky"=>"ky","Louisiana"=>"la","Massachusetts"=>"ma","Maryland"=>"md","Maine"=>"me","Michigan"=>"mi","Minnesota"=>"mn","Missouri"=>"mo","Mississippi"=>"ms","Montana"=>"mt","North Carolina"=>"nc","North Dakota"=>"nd","Nebraska"=>"ne","New Hampshire"=>"nh","New Jersey"=>"nj","New Mexico"=>"nm","Nevada"=>"nv","New York"=>"ny","Ohio"=>"oh","Oklahoma"=>"ok","Oregon"=>"or","Pennsylvania"=>"pa","Rhode Island"=>"ri","South Carolina"=>"sc","South Dakota"=>"sd","Tennessee"=>"tn","Texas"=>"tx","Utah"=>"ut","Virginia"=>"va","Vermont"=>"vt","Washington"=>"wa","Wisconsin"=>"wi","West Virginia"=>"wv","Wyoming"=>"wy");

        $excludeState = ExcludeState::where('status','=',1)->first();
        return view('admin.excludestate',compact('excludeState','statearray'));
    }

    public function addexcluedstate(Request $request){
        $state = json_encode($request->state);

        $excludeState = ExcludeState::where('status','=','1')->first();

        if(!empty($excludeState)){
            $excludeState->state = $state;
            $excludeState->update();
        }else{
            $excludeState = new ExcludeState;
            $excludeState->state = $state;
            $excludeState->save();
        }
        
        return response()->json($excludeState);
    }

    public function users(){
        $users = User::where('is_admin','=',null)->get();

        return view('admin.users',compact('users'));
    }

    public function addNew(){
        return view('admin.addnewuser');
    }

    public function addnewUser(Request $request){
        $request->validate([
           'fname' => 'required',
           'lname' => 'required',
           'email' => 'required|email',
           'password' => 'required', 
        ]);

        $user = User::where('email',$request->email)->first();

        if(!$user){
            $users = new User;
            $users->firstname = $request->fname;
            $users->lastname = $request->lname;
            $users->email = $request->email;
            $users->password = $request->password;
            $users->phonenumber = $request->phone;
            $users->save();

            return back()->with('success','New User Added');
        }else{
            return back()->with('error','User Already exist');
        }
    }

    public function editnewuser($id){
        $user = User::where('id','=',$id)->first();
        
        return view('admin.addnewuser',compact('user'));
    }

    public function updateNewUser(Request $request){
        $id = $request->id;
        $users = User::where('id','=',$id)->first();
        $users->firstname = $request->fname;
        $users->lastname = $request->lname;
        $users->phonenumber = $request->phone;
        $users->update();

        return back()->with('success','New User Updated');
    }

    public function deleteUser(Request $request){
        $user = User::where('id','=',$request->id)->delete();

        return response()->json($user);
    }
}
