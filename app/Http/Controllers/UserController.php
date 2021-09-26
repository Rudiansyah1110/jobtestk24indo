<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\TraceRecordLogin;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index(){
        $datanya = TraceRecordLogin::orderBy('id', 'DESC')->paginate(10);
        $response = [
            "datanya" => $datanya
        ];
        return view('user/index', compact('response'));
    }

    public function edit_data($idnya){
        $datanya = DB::table('trace_record_logins')->where('id', $idnya)->first();
        // dd($datanya);

        $response = [
            "datanya" => $datanya
        ];

        return view('user/edit-data', compact('response'));
    }

    function process_edit(Request $req){
        Request()->validate([
            'name'      => ['required', 'string', 'max:255'],
            'email'     => ['required', 'string', 'email'],
        ]);

        $data = TraceRecordLogin::find($req->id);
        $data->username = $req->name;
        $data->email    = $req->email;
        $execute = $data->save();

        if($execute){
            return redirect('/user/dashboard')->with('success_update_info', 'Data has been update...');
            
        } else {
            return redirect('/user/edit-data/'.$req->id)->with('error_update_info', 'Data Failed to update!');
        }
    }

    public function delete_data($id){
        TraceRecordLogin::where('id', $id)->delete();
        return redirect('/user/dashboard')->with('success_delete', '1 Data Has been Delete...');
    }

}
