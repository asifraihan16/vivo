<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use Validator,Redirect,Response,File;
 use Socialite;
 use App\User;
 class SocialController extends Controller
 {
    public function redirect($provider)
    {
       return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {

     $getInfo = Socialite::driver($provider)->user(); 
     $user = $this->createUser($getInfo,$provider); 
     auth()->login($user); 
     return Redirect::to("user/dashboard");
    
    }

    function createUser($getInfo,$provider)
    {

      if($provider == 'facebook')
      {
        $user = User::where('provider_id', $getInfo->id)->first();
        if (!$user)
        {
             $user = User::create([
                'name'     => $getInfo->name,
                'email'    => $getInfo->email,
                'provider' => $provider,
                'provider_id' => $getInfo->id,
                'password' => md5(rand(1, 10000)),
            ]);
        }
      }
      else
      {
        $user = User::where('google_provider_id', $getInfo->id)->first();
        if (!$user)
        {
             $user = User::create([
                'name'     => $getInfo->name,
                'email'    => $getInfo->email,
                'google_provider' => $provider,
                'google_provider_id' => $getInfo->id,
                'password' => md5(rand(1, 10000)),
            ]);
        }
      }
     
       return $user;
     }

 }