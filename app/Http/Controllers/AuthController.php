<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\RegisterUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
        return view('account.login');
    }

    public function customerregister()
    {
        return view('account.customerregister');
    }

    public function artistregister()
    {
        return view('account.artistregister');
    }

    public function register(Request $request)
    {
        // Validate the request data
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'contact' => 'required|string|max:15', // Adjust the max length according to your requirements
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Insert the new user into the database
        $user = new User;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->contact = $request->contact;
        $user->remember_token = Str::random(40);
        $user->password = Hash::make($request->password);
        $user->save();
        
        // Send a confirmation email
        Mail::to($user->email)->send(new RegisterUser($user));
    
        // Redirect the user after registration
        return redirect('/login')->with('success', 'Registration successful. You can now login.');

    }
    
    public function verify($token)
    {
        $user = User::where('remember_token', '=', $token)->first();
        if(!empty($user))
        {

        }
        else
        {
            abort(404);
        }
    }
}
