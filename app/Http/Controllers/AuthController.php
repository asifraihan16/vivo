<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Redirect, Response;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use DB;
use Exception;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function home()
    {
        return Redirect::to("admin/login");
    }

    public function register()
    {
        return view('admin/register');
    }

    public function postLogin(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $user = Auth::user();

            Session::put('id', $user->id);
            Session::put('name', $user->name);
            Session::put('email', $user->email);
            Session::put('img', $user->img);
            Session::put('contact', $user->img);

            return redirect()->intended('admin/dashboard');
        }
        return Redirect::to("admin/login")->withSuccess('Opps! You have entered invalid credentials');
    }

    public function _postRegister(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();

        $check = $this->create($data);

        return Redirect::to("admin/dashboard")->withSuccess('Great! You have Successfully loggedin');
    }

    public function postRegister(Request $request)
    {
        // return $request;
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => $request->is_admin,
        ]);


        return Redirect::to("admin/users")->withSuccess('Great! You have Successfully loggedin');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('admin.dashboard');
        }
        return Redirect::to("admin/login")->withSuccess('Opps! You do not have access');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'contact' => $data['contact'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('admin/login');
    }

    // ------user login/register panel----------
    public function user_index()
    {
        return view('user.login');
    }

    public function user_home()
    {
        return Redirect::to("user/login");
    }

    public function user_register()
    {
        return view('user.register');
    }

    public function user_postLogin(Request $request)
    {

        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            Session::put('id', $user->id);
            Session::put('name', $user->name);
            Session::put('email', $user->email);
            Session::put('img', $user->img);
            Session::put('contact', $user->img);
            // Authentication passed...
            return redirect()->intended('user/dashboard');
        }
        return Redirect::to("user/login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function user_postRegister(Request $request)
    {

        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        //dd($data);

        $check = $this->create($data);
        return Redirect::to("user/dashboard")->withSuccess('Great! You have Successfully loggedin');
    }

    public function user_dashboard()
    {
        if (Auth::check()) {
            return view('user.dashboard');
        }
        return Redirect::to("user/login")->withSuccess('Opps! You do not have access');
    }

    public function user_create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function user_logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('user/login');
    }

    public function user_list()
    {
        $data = DB::table('users')
            ->where('is_admin', '=', 1)
            ->get();

        return view('admin.users.index', compact('data'));
        // return $admin_user;
    }

    public function users_create()
    {
        return view('admin.users.create');
    }

    public function show()
    {
        $user = auth()->user();
        return view('admin.user_profiles.index', compact('user'));
    }

    public function photographer_login()
    {
        return view('admin.photographer_login');
    }

    public function post_photographer_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['email'=> $request->email, 'password'=> $request->password, 'user_type'=> 2])) {
            $user = Auth::user();

            return redirect()->route('photographer.dashboard');

            // Session::put('id', $user->id);
            // Session::put('name', $user->name);
            // Session::put('email', $user->email);
            // Session::put('img', $user->img);
            // Session::put('contact', $user->img);
            // Authentication passed...
        } else {
            return back()->withError('Oops! You have entered wrong credentials');
        }
    }

    public function photographer_signup()
    {
        return view('admin.photographer_signup');
    }

    public function post_photographer_signup(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        try {
            $validated['user_type'] = 2; // 2 - Photographer (`user_types` table)
            $validated['password'] = Hash::make($request->password);
            $user = User::create($validated);

            Auth::login($user);

            return redirect()->route('photographer.dashboard');
        } catch (Exception $e) {
            return back()->withError($e->getMessage());
        }
    }
}
