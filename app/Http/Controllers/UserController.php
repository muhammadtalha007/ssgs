<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function loginPage()
    {
        return view('auth/user-login-new');
    }

    public function registerPage()
    {
        return view('auth/admin-register-new');
    }

    public function registerUser(Request $request)
    {
        try {
            if (!User::where('email', $request->email)->exists()) {
                $user = new User();
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = md5($request->password);
                $user->type = $request->type;
                $user->save();
                Session::put('userId', $user->id);
                if ($request->type == 'family'){
                    return redirect('family-profile');
                }else{
                    return redirect('student-my-course');
                }

            } else {
                return redirect()->back()->withErrors(['Email Address Already Exists']);
            }
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }
    }

    public function loginUser(Request $request)
    {
        try {
            if (User::where('email', $request->email)->exists()) {
                $user = User::where('email', $request->email)->first();
                if ($user->password == md5($request->password)) {
                    Session::put('userId', $user->id);
                    if ($user->type == 'family'){
                        return redirect('family-profile');
                    }else{
                        return redirect('student-my-course');
                    }

                } else {
                    return redirect()->back()->withErrors(['Invalid email or password!']);
                }
            } else {
                return redirect()->back()->withErrors(['Invalid email or password!']);
            }
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }
    }

    public function get(Request $request)
    {
        $user_id = $request->get("uid", 0);
        $user = User::find($user_id);
        return $user;
    }
}
