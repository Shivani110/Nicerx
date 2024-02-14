<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExcludeState;

class FrontController extends Controller
{
    public function home(){
        return view('frontend.index');
    }

    public function checkState(Request $request){
        $state = $request->state;
        $excludestate = ExcludeState::where('status','=',1)->first();
        $ex_state = json_decode($excludestate->state);

        if(in_array($state, $ex_state)){
            $status = "true";
        }else{
            $status = "false";
        }
        
        return response()->json($status);
    }
}
