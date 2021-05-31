<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password))
        {
            return "Adres email lub hasło nieprawidłowe";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }

    function register(Request $req)
    {
        //return $req->input();
        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->name);
        $user->firstname=$req->firstname;
        $user->lastname=$req->lastname;
        $user->NIP=$req->NIP;;
        $user->tel_nr=$req->tel_nr;
        $user->street=$req->street;
        $user->building_nr=$req->building_nr;
        $user->apart_nr=$req->apart_nr;
        $user->mail=$req->mail;
        $user->mail_code=$req->mail_code;

        $user->save();

        return redirect('/login');
    }

    function myaccount(Request $req)
    {
        $userId = Session::get('user')['id'];
        $data = DB::table('users')
        ->where('users.id', $userId)
        ->select('users.*')
        ->get();

        return view('myaccount', ['data' => $data]);
    }



    function about_us()
    {
       return view('about_us');
    }
    
    function contact()
    {
       return view('contact');
    }
}
