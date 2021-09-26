<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        $datanya = User::orderBy('id', 'DESC')->paginate(10);
        $response = [
            "datanya" => $datanya
        ];
        return view('admin/index', compact('response'));
    }

    public function edit_data($idnya){
        $datanya = DB::table('users')->where('id', $idnya)->first();
        // dd($datanya);

        $response = [
            "datanya" => $datanya
        ];

        return view('admin/edit-data', compact('response'));
    }

    public function process_edit(Request $req){
        // dd($req->all());

        Request()->validate([
            'name'      => ['required', 'string'],
            'email'     => ['required', 'string', 'email', 'max:255'],
            'phone'     => ['required', 'digits_between:11,13'],
            'birth_day' => ['required'],
            'gender'    => ['required'],
            'ktp'       => ['required', 'digits_between:15,25'],
            // 'image'     => ['required', 'max:2048'],
        ]);

        $data = User::find($req->id);

        if(empty($req->image)){
            // echo $req->current_image;
            
            $data->name     = $req->name;
            $data->email    = $req->email;
            $data->role     = $req->role;
            $data->phone    = $req->phone;
            $data->birth_day= $req->birth_day;
            $data->gender   = $req->gender;
            $data->ktp      = $req->ktp;
            $data->photo    = $req->current_image;
        
        } else {
            $photoName = $req->image->getClientOriginalName();
            $req->file('image')->move(public_path('all_photo'), $photoName);

            $data->name     = $req->name;
            $data->email    = $req->email;
            $data->role     = $req->role;
            $data->phone    = $req->phone;
            $data->birth_day= $req->birth_day;
            $data->gender   = $req->gender;
            $data->ktp      = $req->ktp;
            $data->photo    = $photoName;
        }
        
        // dd($data);
        $execute = $data->save();

        if($execute){
            return redirect('/admin/dashboard')->with('success_update_info', 'Data has been update...');
            
        } else {
            return redirect('/admin/edit-data/'.$req->id)->with('error_update_info', 'Data Failed to update!');
        }
    }

    public function delete_data($id){
        User::where('id', $id)->delete();
        return redirect('/admin/dashboard')->with('success_delete', '1 Data Has been Delete...');
    }
}
