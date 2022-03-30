<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin/login');
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
        return Redirect::to("admin/login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function postRegister(Request $request)
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

    public function dashboard()
    {

      if(Auth::check()){
        return view('admin/dashboard');
      }
       return Redirect::to("admin/login")->withSuccess('Opps! You do not have access');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('admin/login');
    }

    // ------user login/register panel----------
    public function user_index()
    {
        // return 'user index';
        return view('user.login');
    }

    public function user_home()
    {
        // return 'user home';
        return Redirect::to("user/login");
    }

    public function user_register()
    {
        // return 'user register';
        return view('user/register');
    }

    public function user_postLogin(Request $request)
    {

        // return 'user post login';
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

        $check = $this->create($data);
       // return 'user post register';
        return Redirect::to("user/dashboard")->withSuccess('Great! You have Successfully loggedin');
    }

    public function user_dashboard()
    {
      if(Auth::check()){
        return view('user/dashboard');
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

    public function user_logout() {
        Session::flush();
        Auth::logout();
        return Redirect('user/login');
    }
}
?>
