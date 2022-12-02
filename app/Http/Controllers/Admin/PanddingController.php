<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class PanddingController extends Controller
{
    //
    public function ViewUsers()
    {
        $pandding=User::where('status','=','0')->paginate(10);
        return view('admin.pandding_view',compact('pandding'));
    }

    

    public function Verify(Request $request,$id)
    {
        
        $verify=User::find($id);
        $verify->status=$request->status;
        $verify->save();
        return redirect()->route('admin.pandding-users');
    }

    public function Reject(Request $request,$id)
    {
        
        $Reject=User::find($id);
        $Reject->status=$request->status;
        $Reject->save();
        return redirect()->route('admin.pandding-users');
    }
}
