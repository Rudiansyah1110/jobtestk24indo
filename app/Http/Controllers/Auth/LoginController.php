<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TraceRecordLogin;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo(){
        if( Auth()->user()->role == 1){
            return route('admin.dashboard');
        
        } else if( Auth()->user()->role == 2){
            return route('user.dashboard');
        
        }
        
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $req){
        $datanya = $req->all();
        $this->validate($req, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if( auth()->attempt(array('email'=>$datanya['email'], 'password'=>$datanya['password']) ) ){

            if( auth()->user()->role == 1){

                //insert record setiap yang login
                $data = new TraceRecordLogin();
                $data->username = auth()->user()->name;
                $data->email = $datanya['email'];
                $execute = $data->save();

                return redirect()->route('admin.dashboard');

            } else if( auth()->user()->role == 2){
                //insert record setiap yang login
                $data = new TraceRecordLogin();
                $data->username = auth()->user()->name;
                $data->email = $datanya['email'];
                $execute = $data->save();
                
                return redirect()->route('user.dashboard');

            }

        } else {
            return redirect()->route('login')->with('error', 'Email and Password are wrong...');
        }
    }

}
