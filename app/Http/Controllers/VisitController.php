<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;


class VisitController extends Controller
{
    

    function register_member(Request $req){
        
        // dd($req->all());
        Request()->validate([
            'name'      => ['required', 'string'],
            'email'     => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'  => ['required', 'string', 'min:8', 'confirmed'],
            'phone'     => ['required', 'digits_between:11,13'],
            'birth_day' => ['required'],
            'gender'    => ['required'],
            'ktp'       => ['required', 'digits_between:15,25'],
            'image'     => ['required', 'max:1024'],
        ]);

        // $photoName = 'default.jpg';
        $photoName = $req->image->getClientOriginalName();
        $req->file('image')->move(public_path('all_photo'), $photoName);
        
        $data = new User();
        
        $data->name     = $req->name;
        $data->email    = $req->email;
        $data->password = Hash::make($req->password);
        $data->role     = '2';
        $data->phone    = $req->phone;
        $data->birth_day= $req->birth_day;
        $data->gender   = $req->gender;
        $data->ktp      = $req->ktp;
        $data->photo    = $photoName;

        // dd($data);
        $execute = $data->save();

        if($execute){
            return redirect('/register-success/'.$req->email)->with('success_create_info', 'Successfully to create account member...');
            
        } else {
            return redirect('/register-member')->with('error_create_info', 'Upss Failed to create account member!');
        }
    }

    function success_create($mail){
        $data_user = DB::table('users')->where('email', $mail)->get();
        
        $datanya = [
            "data_created" => $data_user
        ];
        return view('after_create', compact('datanya'));
    }

    public function api_index(){
        $datanya = DB::table('users')->where('role', '2')->get();

        $response = [
            "message" => "Success to load Data Member",
            "datanya" => $datanya
        ];

        return response()->json($response, Response::HTTP_OK);
    }
}
