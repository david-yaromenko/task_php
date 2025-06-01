<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registration()
    {
        return view('registration');
    }

    public function userRegistration(Request $request)
    {
        $validated = $request->validate([

            'email' => 'required|email|unique:user',
            'password' => 'required|min:4',
        ]);

        $requestUserEmail = $request->input('email');
        $userEmail = UserModel::where('email', $requestUserEmail)->exists();

        if($userEmail){
            return back()->withErrors(['email' => 'Користувач з таким Email вже зареєстрований']);
        }

        $newUser = new UserModel();
        $newUser->email = $validated['email'];
        $newUser->password = Hash::make($validated['password']);

        $newUser->save();

        return redirect()->route('login');
    }


    public function userLogin(Request $request)
    {

        $requestUserEmail = $request->input('email');
        $userEmail = UserModel::where('email', $requestUserEmail)->first();

        if ($userEmail && Hash::check($request->password, $userEmail->password)) {
            Auth::login($userEmail);
            return redirect()->route('home');
        }else {
            return back()->withErrors(['email' => 'Email не зареєстрований']);
        }
    }

    public function loginPage()
    {
        return view('login');
    }

    public function logout()
    {
        Auth::logout();
        return view('login');
    }

    public function homePage()
    {
        return view('home');
    }
}
