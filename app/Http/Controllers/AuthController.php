<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB; 

class AuthController extends Controller
{
    public function index(){
        return view('home');
    }

    public function login()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user(); 
            $childs = DB::table('immunisation_recorders')->get()->toArray();
            return view('dashboard',['user'=>$user,'childs'=>$childs]);
        }else{ 
            return redirect('/login')->with('error', 'Invalid email or password.');
        }
    }

    public function child_register(){
        return view('child_register');
    }
    public function doctor_registration(){
        return view('doctor');
    }
    public function doctor_register_db(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'phone'=> 'required'
        ]);
        $user = New User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->password = Hash::make($request->get('password'));
        if($user->save()){
            return redirect('/doctor-register')->with('success', 'Doctor Registration successfull');
        }else{
            return redirect('/doctor-register')->with('success', 'Doctor Registration Failed');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function get_password(){
        return $hashedPassword = Hash::make("123456789");
    }
}
