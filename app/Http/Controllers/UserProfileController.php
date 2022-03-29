<?php

namespace App\Http\Controllers;

use App\Services\FileUploadService;
use App\UserProfile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Redirect;
use Image;
use File;

class UserProfileController extends Controller
{
    protected $fileUploadService;

    public function __construct(FileUploadService $fileUploadService)
    {
        $this->middleware('auth');
        $this->fileUploadService = $fileUploadService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function show(UserProfile $userProfile)
    {
        // $data = Auth::user();

        // return Session::get('img');

        return view('admin.user_profiles.index');
    }

    public function user_show(UserProfile $userProfile)
    {
        return view('user.user_profiles.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProfile $userProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserProfile $userProfile)
    {
        return Session::get('name');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProfile $userProfile)
    {
        //
    }

    public function profile_info(Request $request)
    {
        // return $request;
        $id = Session::get('id');

        $rules = [
            // 'img' => 'mimes:jpeg,jpg|max:100|dimensions:width=300,height=300',
            'img' => 'mimes:jpeg,jpg|dimensions:width=150,height=150',
            'name' => 'required',
        ];

        $customMessages = [
            // 'name.required' => 'Please Provide Name',
            // 'name.unique' => 'Already There Is a Mobile Series With This Name',
            'img.dimensions' => 'User Image Size = Width : 150px, Height : 150px',
        ];

        $this->validate($request, $rules, $customMessages);

        if ($request->file('img') != '') {
            $user_info = User::find(Session::get('id'));

            if ($user_info->img != '' && $user_info->img != null) {
                // $image_old = storage_path('') . '/' . $user_info->img;
                // unlink($image_old);
            }
            $image_url = $this->fileUploadService->upload('img', 'profile_image');

            /* $image_name = $request->name;
            $upload_path = storage_path() . '/app/public/profile_image/';
            $image_path = 'app/public/profile_image/';
            $image = $request->img;
            $imageName = $image_name . '_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();

            // $image->move($upload_path, $imageName);
            $img = Image::make($image->getRealPath());
            // code for resize and compress iamge in laravel
            $img->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save($upload_path . '/' . $imageName);

            $image_url = $image_path . $imageName; */
        } else {
            $image_url = Session::get('img');
        }

        if ($request->email != '') {
            $email = $request->email;
        }

        if ($request->contact != '') {
            $contact = $request->contact;
        }

        // return $id;
        User::where('id', $id)->update([
            'name' => $request->name,
            'img' => $image_url,
            'email' => $email,
            'contact' => $contact,
        ]);

        // $user = Auth::user();
        $user = User::find(Session::get('id'));;

        Session::put('id', $user->id);
        Session::put('name', $user->name);
        Session::put('email', $user->email);
        Session::put('img', $user->img);
        Session::put('contact', $user->contact);

        return Redirect::to("admin/user_profile");
    }

    public function user_profile_info(Request $request)
    {
        $id = Session::get('id');

        $rules = [
            // 'img' => 'mimes:jpeg,jpg|max:100|dimensions:width=300,height=300',
            'img' => 'mimes:jpeg,jpg',
            'name' => 'required',
        ];

        $customMessages = [
            // 'name.required' => 'Please Provide Name',
            // 'name.unique' => 'Already There Is a Mobile Series With This Name',
            // 'img.dimensions' => 'User Image Size = Width : 150px, Height : 150px',
        ];

        $this->validate($request, $rules, $customMessages);

        if ($request->file('img') != '') {
            $user_info = User::find(Session::get('id'));

            if ($user_info->img != '' && $user_info->img != null) {
                // $image_old = storage_path('') . '/' . $user_info->img;
                // unlink($image_old);
            }
            $image_url = $this->fileUploadService->upload('img', 'profile_image');

            /* $image_name = $request->name;
            $upload_path = storage_path() . '/app/public/profile_image/';

            $image_path = 'app/public/profile_image/';

            $image = $request->img;

            $imageName = $image_name . '_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();

            // $image->move($upload_path, $imageName);

            $img = Image::make($image->getRealPath());

            // code for resize and compress iamge in laravel
            $img->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save($upload_path . '/' . $imageName);

            $image_url = $image_path . $imageName; */
        } else {
            $image_url = Session::get('img');
        }

        $email = $request->email ?? null;

        $contact = $request->contact ?? null;

        // return $id;
        User::where('id', $id)->update([
            'name' => $request->name,
            'img' => $image_url,
            'email' => $email,
            'contact' => $contact,
        ]);

        // $user = Auth::user();
        $user = User::find(Session::get('id'));

        Session::put('id', $user->id);
        Session::put('name', $user->name);
        Session::put('email', $user->email);
        Session::put('img', $user->img);
        Session::put('contact', $user->contact);

        return Redirect::to("user/user_profile");
    }
}
