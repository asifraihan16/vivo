<?php

namespace App\Http\Controllers\Photographer;

use App\Http\Controllers\Controller;
use App\Services\FileUploadService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    protected $fileUploadService;
    
    public function __construct(FileUploadService $fileUploadService)
    {
        $this->fileUploadService = $fileUploadService;
    }

    public function profile()
    {
        $user = auth()->user();
        return view('photographer.profile.index', compact('user'));
    }

    public function update_profile(Request $request)
    {
        $user_info = auth()->user();

        $rules = [
            // 'img' => 'max:100|dimensions:width=300,height=300',
            'img' => 'dimensions:width=150,height=150',
            'name' => 'required',
        ];

        $customMessages = [
            // 'name.required' => 'Please Provide Name',
            // 'name.unique' => 'Already There Is a Mobile Series With This Name',
            'img.dimensions' => 'User Image Size = Width : 150px, Height : 150px',
        ];

        $this->validate($request, $rules, $customMessages);

        if ($request->file('img') != '') {

            if ($user_info->img != '' && $user_info->img != null) {
                // $image_old = storage_path('') . '/' . $user_info->img;
                // unlink($image_old);
            }
            $image_url = $this->fileUploadService->upload('img', 'profile_image');

        } else {
            $image_url = $user_info->img;
        }

        // return $id;
        $user_info->update([
            'name' => $request->name,
            'img' => $image_url,
            'email' => $request->email ?? NULL,
            'contact' => $request->contact ?? NULL,
        ]);


        Session::put('id', $user_info->id);
        Session::put('name', $user_info->name);
        Session::put('email', $user_info->email);
        Session::put('img', $user_info->img);
        Session::put('contact', $user_info->contact);

        return back();
    }
}
