<?php

namespace App\Http\Controllers;

use App\AddDomain;
use App\Admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function loginPage()
    {
        return view('admin/admin-login');
    }

    public function loginAdmin(Request $request)
    {
        try {
            if (Admin::where('email', $request->email)->exists()) {
                $admin = Admin::where('email', $request->email)->first();
                if ($admin->password == md5($request->password)) {
                    Session::put('id', $admin->id);
                    Session::put('isAdmin', true);
                    return redirect('home');
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

    public function login(Request $request)
    {
        if (Admin::where(['email' => $request->email, 'password' => $request->password])->exists()) {
            $id = Admin::where(['email' => $request->email, 'password' => $request->password])->first()['id'];
            Session::put('id', $id);
            Session::put('isAdmin', true);
            return redirect('home');
        } else {
            return redirect()->back()->withErrors(['Invalid username or password']);
        }
    }

    public function adminDashboard()
    {
        $domains = AddDomain::all();
        $users = User::all();
        return view('admin.admin-dashboard')->with(['domains' => $domains, 'users' => $users]);
    }

    public function logout(Request $request)
    {
        Session::remove('userId');
        return redirect('/');
    }
}
